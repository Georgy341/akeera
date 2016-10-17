<?php
include __DIR__ . '/vendor/autoload.php';

//The constructor
$vk = new Vk("66bfdcd2bbb6223dcf3e816b7b35b6f606cbad2d0b4e6d17527fe7d67e2b10753a641eaa43d7140d64b8a");

//Set user online
$vk->method('account.setOnline');

//Upload photo
//$photo = $vk->uploadImage('/path/to/file');

//Wall posting
$response = $vk->method('wall.post', [
    'message' => urlencode('Privet Annia'),
  //  'attachments' => $photo
]);
?>
