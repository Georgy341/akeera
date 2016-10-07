<html>
<head>
  <meta charset="UTF-8">
  <title>Задание три.</title>
</head>
<body>
  <a href="http://localhost:8000/index.php?name=George">ссылка</a>
<p></p>
<?php
if (!empty($_GET["name"])){
  echo "Privet, " . $_GET["name"] . "!!!";
}
else {
  echo "Error!!!!";
}

 ?>
 </body>
 </html>
