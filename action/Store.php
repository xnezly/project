<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$article = $_POST['article'];

$pdo -> query("INSERT INTO product (name,price,quantity,article) VALUES ('$name','$price','$quantity','$article')");

header('Location: /index.php');