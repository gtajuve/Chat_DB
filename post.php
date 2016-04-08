<?php
session_start();
require_once 'chat_model.php';
if(isset($_SESSION['user'])){
    $text=isset($_POST['text'])?$_POST['text']:'';
    if($text!=''&&isset($_SESSION['user'])){
        $chat=Chat::getInstance();
        $insertData=array(
            'user'=>$_SESSION['user'],
            'message'=>$text
        );
        $chat->insertMessage($insertData);

    }

}
