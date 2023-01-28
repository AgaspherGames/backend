<?php
if (isset($_POST['num1']) && isset($_POST['operator']) && isset($_POST['num2'])) {
  $num1 = $_POST['num1'];
  $operator = $_POST['operator'];
  $num2 = $_POST['num2'];
  switch ($operator) {
    case '+':
      $result = $num1 + $num2;
      break;
    case '-':
      $result = $num1 - $num2;
      break;
    case '/':
      $num2 != 0 ? $result =  ($num1 / $num2) : $result = ('НЕЛЬЗЯ ДЕЛИТЬ НА НОЛЬ!!!!');
      break;
    case '*':
      $result = $num1 * $num2;
      break;
    default:
      $result = 'Неверный оператор';
      break;
  }
  echo "<h4>Результат: $result</h4>";
}
?>

<!-- Область основного контента -->
<form action='' method="post">
  <label>Число 1:</label>
  <br />
  <input name='num1' type='text' />
  <br />
  <label>Оператор: </label>
  <br />
  <input name='operator' type='text' />
  <br />
  <label>Число 2: </label>
  <br />
  <input name='num2' type='text' />
  <br />
  <br />
  <input type='submit' value='Считать'>
</form>
<!-- Область основного контента -->