<?php
session_start();
$_SESSION['age']=$_POST['age'];
$_SESSION['history'][] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Имя: <?=$_SESSION['name'] ?> </h1>
    <h1>Фамилия: <?=$_SESSION['lastname'] ?> </h1>
    <h1>Возраст: <?=$_SESSION['age'] ?> </h1>
    <h3>История сайта:</h3>
    <?php
    foreach ($_SESSION['history'] as $value) {
        echo "<p>$value</p>";
    }
    session_unset();
    ?>

</body>
</html>