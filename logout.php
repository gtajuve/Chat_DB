<?php
session_start();
require_once 'chat_model.php';
$chat=Chat::getInstance();
$chat=Chat::getInstance();
$insertData=array(
    'user'=>'',
    'message'=>'Потребител '.$_SESSION['user'].' напусна чата',
);
$chat->insertMessage($insertData);
unset($_SESSION['user']);

session_destroy();
header('Location:index.php');
exit;