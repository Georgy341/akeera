<html>
<head>
  <meta charset="UTF-8">
  <title>Задание четыре.</title>
</head>
<body>
  <form method="post" action="index.php">Заполни поле:<br>
    <br>
    Укажите ваше имя: <input name="user_name" type="text" maxlength="20" size="25"
    value="" />
    <br><br> <input type=submit value="Передать информацию"></form>

<?php
if (!empty($_POST["user_name"])){
  echo "Privet, " . $_POST["user_name"] . "!!!";
}
else {
  echo "Error!!!!";
}

 ?>
 </body>
 </html>
