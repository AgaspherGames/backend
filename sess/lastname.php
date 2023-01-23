<?php
session_start();
$_SESSION['name']=$_POST['name'];
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
    <form action="age.php" method='post'>
        <label for="">Enter Lastname</label>
        <input name='lastname' type="text">
        <button>send</button>
    </form>
</body>
</html>