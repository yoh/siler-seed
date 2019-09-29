<?php declare(strict_types=1);

return [
    // 'log_path' => __DIR__ . '/../var/log',
    // 'storage_path' => __DIR__ . '/../var/storage',
    'db' => [
        'default' => [
            'database_type' => 'mysql',
            'charset' => 'utf8',
            'database_name' => 'app',
            'server' => 'localhost',
            'username' => 'app',
            'password' => 'secret',
            'logging' => true,
        ],
    ],
    // 'jwt' => [
    //     'secret' => 'secret',
    //     'ttl' => 60 * 60,
    //     'default_user' => (object) ['id' => 1, 'roles' => '[]', 'is_admin' => true],
    // ],
    // 'twig' => [
    //     'template_path' => __DIR__ . '/../templates',
    //     'cache_path' => __DIR__ . '/../var/twig_cache',
    // ]
];
