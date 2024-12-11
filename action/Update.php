<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare ("UPDATE `product` SET
`quantity` = :quantity,
   `price` = :price,
   `article` = :article
   WHERE id = :id");
$stmt->execute([
    'price' => $_POST['price'],
    'quantity' => $_POST['quantity'],
    'article' => $_POST['article'],
    'id' => $_POST['id']
]);

header('Location: /index.php');
