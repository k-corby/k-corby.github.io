<?php
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $rootPath = dirname(__DIR__,2);
    // Global Settings Object
    $containerBuilder->addDefinitions([
        'settings' => [
            // View settings
            /*'view' => [
                'template_path' =>$rootPath . '/App/Views',
                'twig' => [
                    'cache' =>$rootPath . '/App/Cache',
                    'debug' => (getenv('APPLICATION_ENV') != 'production'),
                    'auto_reload' => true,
                ],
            ],
            'doctrine' => [
                'meta' => [
                    'entity_path' => [ $rootPath . '/App/Data/Models' ],
                    'auto_generate_proxies' => true,
                    'proxy_dir' => $rootPath . '/App/Cache/Proxies',
                    'cache' => null,
                ],
                'connection' => [
                    'driver'         => 'pdo_mysql',
                    'user'           => 'root',
                    'password'       => '',
                    'host'           => 'localhost',
                    'dbname'         => 'qldgovsports',
                ]
            ],*/
        ],
    ]);
};

/*
return [
    'settings' => [
        // Base path
        'base_path' => '',
        ],
    // Bind an interface to an implementation
    IProductService::class => DI\get(ProductService::class),
    IDbContext::class => DI\get(DbContext::class),
    'test' => [
        'bob@example.com',
        'alice@example.com',
    ],
    'view' => [
        'template_path' =>$rootPath . '/App/Views',
        'twig' => [
            'cache' =>$rootPath . '/App/Cache/Twig',
            'debug' => (getenv('APPLICATION_ENV') != 'production'),
            'auto_reload' => true,
        ],
    ],
];*/