<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Форма для Vk-поста</title>
  <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>
</head>
<body>
  <div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
  <h1>Заполните форму:</h1>
  <br>
  <form role="form" method="post" action="AutoPostVK.php">
    <div class="form-group">
    <label for="post">Текст публикуемого вами сообщения:</label>
    <textarea class="form-control" name="text_post" id="post" rows="10" cols="35">Ваш текст</textarea>
  </div>
  <div class="form-group">
    <label for="token">Введите ваш access_token:</label>
    <input class="form-control" type="text" id="token" name="access_token">
  </div>
    <input class="btn btn-info btn-lg btn-block" type="submit" value="Опубликовать">
  </form>
</div>
  <div class="col-sm-3"></div>
</div>
</body>
</html>
