<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Форма входа</title>
  <link rel='stylesheet' href='/css/login.css' type='text/css' media='all'>
</head>
<body>
    <h1>Форма входа</h1>
    <form class="login" method="post" action="auth.php">
            <label for="login">Логин</label>
            <input type="text" id="login" name="login" />
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" />
            <input type="submit" value="Войти" />
    </form>

</body>
</html>
