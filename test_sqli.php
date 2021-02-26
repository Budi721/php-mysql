<?php

require_once __DIR__ . '/get_connection.php';

$connection = getConnection();

$username = $connection->quote('admin');
$password = $connection->quote('admin');
$sql = "SELECT * FROM admin WHERE username=$username AND password=$password;";

$statement = $connection->query($sql);

$succes = false;
$find_user = null;
foreach ($statement as $row) {
    $succes = true;
    $find_user = $row['username'];
}

if ($succes) {
    echo 'Sukses Login ' . $find_user . PHP_EOL;
} else {
    echo 'Gagal login' . PHP_EOL;
}

$connection = null;
