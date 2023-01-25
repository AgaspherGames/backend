<?php
error_reporting(0);
$data = json_decode(file_get_contents("./info.json"), true);
if ($_POST["name"] and $_POST["comment"]) {
  $data[] = [
    "name" => $_POST["name"],
    "comment" => $_POST["comment"],
    "time" => date('d.m.y h:i:s')
  ];
  file_put_contents('./info.json', json_encode($data));
  header('Location: ' . '/files');
}
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
  <table border="1">
    <tr>
      <th>Имя</th>
      <td>Время Отправки</td>
      <td>Комментарий</td>
    </tr>
    <?php
    foreach ($data as $comm) {
      echo '<tr>';
      echo '<th>' . $comm["name"] . '</th>' . '<td>' . $comm["time"] . '</td>' . '<td>' . $comm["comment"] . '</td>';
      echo '</tr>';
    }
    ?>
  </table>
  <form action="" method="post">
    Имя:<br>
    <input type="text" name="name"><br>
    Комментарий<br>
    <textarea name="comment" id="" cols="21" rows="2"></textarea><br><br>
    <button>Отправить</button>
  </form>
</body>

</html>