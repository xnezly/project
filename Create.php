
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
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .button-style {
            margin-top: 10px;
            width: 87%;
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
<h1>Добавить товар</h1>
    <form action="action/Store.php" method="post">
        <input type="text" name="name" placeholder="Название">
        <input type="number" name="price" placeholder="Цена">
        <input type="number" name="quantity" placeholder="Количество">
        <input type="number" name="article" placeholder="Артикул">
        <input type="submit" class="submit">
        <a href="/index.php" class="button-style">Назад</a>
    </form>
</body>
</html>