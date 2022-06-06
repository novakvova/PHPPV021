<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Сайт</title>
</head>
<body>
    <h1>Hello PV021</h1>
    <a href="login.php">Вхід</a>
    <?php
    $a=12;
    $a="Семен";
    //$a=[23,45];
    $arr=[23,56,18];
    //$n = count($arr);
    echo "<p>Розмір масива ".count($arr)."</p>";
    echo "<ul>";
    foreach ($arr as $item)
    {
        echo"<li>$item</li>";
    }
    echo"</ul>";
    echo "<p>$a</p>";
    ?>
    <?php
        echo "<h2>Hello php</h2>";
    ?>
</body>
</html>