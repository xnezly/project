<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';


$stmt = $pdo->prepare ("UPDATE `product` SET
`quantity` = :quantity,
   `price` = :price
   WHERE article = :article");
$stmt->execute([
    'price' => $_POST['price'],
    'quantity' => $_POST['quantity'],
    'article' => $_POST['article']
]);

header('Location: /index.php');
