<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$pdo -> query("DELETE FROM product WHERE id = '$id'");

header("Location: /index.php");