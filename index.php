<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PHP Сайт</title>
</head>
<body>
<div class="container py-3">
    <?php include "navbar.php" ?>
    <h1 class="text-center">Користувачі</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">FullName</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
        </thead>
        <tbody>
        <?php
        try {
            $conn = new PDO("mysql:host=localhost;dbname=pv021", "root", "");
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            $i=1;
            while ($row = $result->fetch()) {
                echo '
        <tr>
            <th scope="row">'.$i.'</th>
            <td>
                <img src="images/'.$row["image"].'" width="75" alt="фото">
            </td>
            <td>'.$row["fullname"].'</td>
            <td>'.$row["email"].'</td>
            <td>'.$row["phone"].'</td>
        </tr>
    ';
                $i++;
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
        ?>

        </tbody>

    </table>

</div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>