<?php

declare(strict_types=1);

$host = '127.0.0.1';
$port = 3306;
$username = 'root';
$password = '';
$database = 'laravel_transfrome';

$pdo = new PDO(
    sprintf('mysql:host=%s;port=%d', $host, $port),
    $username,
    $password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ],
);

$pdo->exec(sprintf(
    'CREATE DATABASE IF NOT EXISTS `%s` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci',
    str_replace('`', '``', $database),
));

echo "Database ensured: {$database}\n";
