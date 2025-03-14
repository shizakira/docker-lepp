<?php

$dsn = 'pgsql:host=postgres;port=5432;dbname=postgres';
$user = 'postgres';
$password = 'postgres';

try {
    $pdo = new PDO($dsn, $user, $password);
    $message = "Postgres connection successful";
} catch (PDOException $e) {
    $message = "Postgres connection failed: {$e->getMessage()}";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docker lepp stack</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="message"> <?= $message ?> </div>
<script src="assets/js/script.js"></script>
</body>
</html>
