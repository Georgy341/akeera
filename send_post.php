<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Форма для Vk-поста</title>
</head>
<body>
  <h1>Заполните форму:</h1>
  <p>
  <form method="post" action="AutoPostVK.php">
    Текст публикуемого вами сообщения:<br>
    <textarea name="text_post" rows="10" cols="35">Ваш текст</textarea><br><br>
    Введите ваш access_token:<br>
    <input type="text" name="access_token"><br><br>
    <input type="submit" value="Опубликовать">
  </form></p>
</body>
</html>
