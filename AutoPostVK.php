<?php
include __DIR__ . '/vendor/autoload.php';

//The constructor
$vk = new Vk($_POST["access_token"]);

//Set user online
$vk->method('account.setOnline');

//Upload photo
//$photo = $vk->uploadImage('/path/to/file');

//Wall posting
$response = $vk->method('wall.post', [
    'message' => urlencode($_POST["text_post"]),
  //  'attachments' => $photo
]);
?>
