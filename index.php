<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$products = $pdo -> query("SELECT * FROM product")->fetchAll();
$entrance = $pdo -> query("SELECT 
    entrance.id, 
    product.name AS product_name, 
    entrance.datetime, 
    entrance.Quantity
FROM 
    entrance
JOIN 
    product ON entrance.product_id = product.id;")->fetchAll();

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .links {
        margin-bottom: 20px;
    }

    .links a {
        text-decoration: none;
        color: #007BFF;
        margin-right: 15px;
        font-weight: bold;
    }

    .links a:hover {
        text-decoration: underline;
    }

    .product, .entrance {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    .product h1, .entrance h1 {
        font-size: 24px;
        margin-bottom: 15px;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 15px;
        transition: box-shadow 0.3s;
    }

    .card:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .card h1 {
        font-size: 20px;
        margin: 0 0 10px;
    }

    .card p {
        font-size: 16px;
        color: #555;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #007BFF;
        color: white;
    }

    tr:hover {
        background-color: #e9ecef;
    }

    a {
        color: #007BFF;
        text-decoration: none;
    }

</style>
<body>
<div class="links">
<a href="Create.php" id="CreateTovar">Добавить товар в базу</a>
<a href="CreateEntrance.php" id="CreateEntrance">Добавить информацию о поступлении товара</a>
</div>
<div class="product">
    <h1>Товар</h1>
<?php foreach($products as $item):?>
    <div class="card">
        <h1><?=$item['name']?></h1>
        <p>Цена: <?= $item['price']?>.р</p>
        <p>В наличии: <?= $item['quantity']?>.шт</p>
        <p>Артикул: <?= $item['article']?></p>
        <a href="action/Delete.php?id=<?= $item['id'] ?>" id="DeleteTovar">Удалить</a>
        <td><a href="action/Edit.php?id=<?= $item['id'] ?> " id='EditTovar'>Изменить</a></td>
    </div>
<?php endforeach;?>
</div>
<div class="entrance">
    <h1>Поступление</h1>
        <table>
            <tr>
                <th>Название</th>
                <th>Дата поставки</th>
                <th>Количество</th>
                <th>Удалить</th>
                <th>Изменить</th>
            </tr>
            <?php foreach($entrance as $item):?>
            <tr>
                <td><?=$item['product_name']?></td>
                <td><?=$item['datetime']?></td>
                <td><?=$item['Quantity']?></td>
                <td><a href="action/DeleteEntrance.php?id=<?= $item['id'] ?>" id="DeleteEntrance">Удалить</a></td>
                <td><a href="EditEntrance.php?id=<?= $item['id'] ?>" id="EditEntrance">Изменить</a></td>
            </tr>
            <?php endforeach;?>
        </table>
</div>
</body>
</html>