<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare("SELECT * FROM entrance WHERE id = ?");
$stmt->execute([$_GET['id'] ?? '']);
$entrance = $stmt->fetch(PDO::FETCH_ASSOC);
$products = $pdo -> query("SELECT * FROM product")->fetchAll();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin: 10px 0;
        }

        label {
            margin-left: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        img{
            height: 100px;
        }

        .button-style {
            display: inline-block;
            padding: 9px 25px;
            background: #007BFF;
            border: 1px solid #007BFF;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            font-size: 14px;
        }

        .button-style:hover, .button-style:focus {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<form action="/action/UpdateEntrance.php/" method="post">
    <input type="hidden" name="id" value="<?= $entrance['id'] ?>">
    <select name="product" id="">
        <?php foreach ($products as $item):?>
            <option value="<?=$item['article']?>"><?=$item['name']?></option>
        <?php endforeach;?>
    </select>
    <input type="date" name="datetime" placeholder="Дата" value="">
    <input type="text" name="Quantity" placeholder="Количество" value="<?= $entrance['Quantity'] ?>">
    <input type="submit" class="submit">
    <a href="/index.php" class="button-style">Назад</a>
</form>
</body>
</html>
