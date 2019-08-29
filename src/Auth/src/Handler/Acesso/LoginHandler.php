<?php

declare(strict_types=1);

namespace Auth\Handler\Acesso;

use Auth\JWT\JWT;
use Auth\Repository\AcessoRepository;
use Exception;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class LoginHandler implements RequestHandlerInterface
{
    private $jwtUtil;
    private $acessoRepository;

    public function __construct(JWT $jwtUtil, AcessoRepository $acessoRepository)
    {
        $this->jwtUtil = $jwtUtil;
        $this->acessoRepository = $acessoRepository;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $body = $request->getParsedBody();
        try {

            $acesso = $this->acessoRepository->login($body['login'], $body['senha']);

            $permissoes = $this->acessoRepository->getPermissionsByAccess($acesso);

            // $token = $this->jwtUtil->createToken(["usuario" => $acesso->getUsuario()]);

            //return $this->jwtUtil->tokenResponse($token);

            return new JsonResponse([$permissoes]);
        } catch (Exception $error) {
            return new JsonResponse(["error" => $error->getMessage()], 400);
        }
    }
}
