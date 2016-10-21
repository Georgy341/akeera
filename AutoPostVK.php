<?php
include __DIR__ . '/vendor/autoload.php';

//The constructor
<<<<<<< HEAD
$vk = new Vk($_POST["access_token"]);
=======
$vk = new Vk("66bfdcd2bbb6223dcf3e816b7b35b6f606cbad2d0b4e6d17527fe7d67e2b10753a6417140d64b8a");
>>>>>>> 2bccf2a91a5e51243ac584b336ee61b95650ed57

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
