<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email = $_POST['email'];
    if($email=='admin@gmail.com')
    {
        header("Location: /");
        exit();
    }
    else {
        echo "Не вірно вказані дані";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Реєстрація</title>
</head>
<body>
<?php include "navbar.php" ?>
<h1>Вхід</h1>
<form method="post">
    <input type="email" name="email">
    <input type="submit" value="Зайти">
</form>
</body>
</html>
