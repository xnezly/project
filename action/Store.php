<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$pdo -> query("INSERT INTO product (name,price,quantity) VALUES ('$name','$price','$quantity')");

header('Location: /index.php');