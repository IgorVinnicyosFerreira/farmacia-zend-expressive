<?php

/**
 * This file generated by Zend\Expressive\Tooling\Factory\ConfigInjector.
 *
 * Modifications should be kept at a minimum, and restricted to adding or
 * removing factory definitions; other dependency types may be overwritten
 * when regenerating this file via zend-expressive-tooling commands.
 */

declare(strict_types=1);

return [
    'dependencies' => [
        'factories' => [
            App\Handler\Compra\ComprasPorClienteHandler::class => App\Handler\Compra\ComprasPorClienteHandlerFactory::class,
            App\Handler\Compra\InserirHandler::class => App\Handler\Compra\InserirHandlerFactory::class,
            App\Handler\Compra\ListarHandler::class => App\Handler\Compra\ListarHandlerFactory::class,
            Auth\Handler\Acesso\LoginHandler::class => Auth\Handler\Acesso\LoginHandlerFactory::class,
            Cadastro\Handler\Cliente\DeletarHandler::class => Cadastro\Handler\Cliente\DeletarHandlerFactory::class,
            Cadastro\Handler\Cliente\EditarHandler::class => Cadastro\Handler\Cliente\EditarHandlerFactory::class,
            Cadastro\Handler\Cliente\InserirHandler::class => Cadastro\Handler\Cliente\InserirHandlerFactory::class,
            Cadastro\Handler\Cliente\ListarHandler::class => Cadastro\Handler\Cliente\ListarHandlerFactory::class,
            Cadastro\Handler\Remedio\AtualizarHandler::class => Cadastro\Handler\Remedio\AtualizarHandlerFactory::class,
            Cadastro\Handler\Remedio\DeletarHandler::class => Cadastro\Handler\Remedio\DeletarHandlerFactory::class,
            Cadastro\Handler\Remedio\InseriHandler::class => Cadastro\Handler\Remedio\InseriHandlerFactory::class,
            Cadastro\Handler\Remedio\ListarHandler::class => Cadastro\Handler\Remedio\ListarHandlerFactory::class,
            Cadastro\Handler\Usuario\DeletarHandler::class => Cadastro\Handler\Usuario\DeletarHandlerFactory::class,
            Cadastro\Handler\Usuario\EditarHandler::class => Cadastro\Handler\Usuario\EditarHandlerFactory::class,
            Cadastro\Handler\Usuario\InserirHandler::class => Cadastro\Handler\Usuario\InserirHandlerFactory::class,
            Cadastro\Handler\Usuario\ListarHandler::class => Cadastro\Handler\Usuario\ListarHandlerFactory::class,
        ],
    ],
];
