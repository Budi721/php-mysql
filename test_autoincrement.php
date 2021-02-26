<?php

require_once __DIR__ . '/get_connection.php';

$connection = getConnection();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('eko@test.com', 'hi')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;