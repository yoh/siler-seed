<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

SilerExt\Config\initConfig(__DIR__ . '/config/config.php');
$config = (object) config('db.default');

return [
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds',
    ],
    'environments' => [
        'default_migration_table' => "phinxlog",
        'default_database' => "default",
        'default' => [
            'adapter' => $config->database_type,
            'host' => $config->server,
            'name' => $config->database_name,
            'user' => $config->username,
            'pass' => $config->password,
            'port' => $config->port ?? 3306,
            'charset' => $config->charset,
        ]
    ],
    'version_order' => "creation",
];
