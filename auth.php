<?php
  $login = ;
  $password = ;
  if (isset($_POST['submit-form'])) {
    $login = $_POST[login];
    $password = $_POST[password];
}
  if ($login="admin") {
        if ($password=12345) {
          echo "Вы вошли!";
      } else {
        echo "Вы ввели не верный пароль.";
    }
}  else {
  echo "Такого пользователя не существует.";
}
 ?>
