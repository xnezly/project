<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';


$stmt = $pdo->prepare ("UPDATE `entrance` SET
`product_id` = :product_id,
 `Quantity` = :Quantity,
   `datetime` = :datetime
   WHERE id = :id");
$stmt->execute([
    'product_id' => $_POST['product'],
    'Quantity' => $_POST['Quantity'],
    'datetime' => $_POST['datetime'],
    'id' => $_POST['id']
]);

header('Location: /index.php');
