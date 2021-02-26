<?php

require_once __DIR__ . '/get_connection.php';

$connection = getConnection();

$sql = <<<SQL
    SELECT id, name, email FROM customers;
SQL;

$statement = $connection->query($sql);

foreach ($statement as $row) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];

    echo 'Id : ' . $id . PHP_EOL;
    echo 'Name : ' . $name . PHP_EOL;
    echo 'Email : ' . $email . PHP_EOL;
}

$connection = null;