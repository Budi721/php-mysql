<?php

require_once __DIR__ . '/get_connection.php';

$connection = getConnection();
$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES('eko@test.com', 'hi');");
$connection->exec("INSERT INTO comments(email, comment) VALUES('eko@test.com', 'hi');");
$connection->exec("INSERT INTO comments(email, comment) VALUES('eko@test.com', 'hi');");
$connection->exec("INSERT INTO comments(email, comment) VALUES('eko@test.com', 'hi');");
$connection->exec("INSERT INTO comments(email, comment) VALUES('eko@test.com', 'hi');");

$connection->commit();
$connection = null;