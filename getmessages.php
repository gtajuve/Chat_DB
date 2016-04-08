<?php
require_once 'chat_model.php';
$chat=Chat::getInstance();
$messages=$chat->getAll();
$html='';
foreach($messages as $message){
    $html.='<div>('.date('g:i A',(int)$message['post_date']).')<b>'.$message['user'].'</b><p>'.$message['message'].'</p></div>';
}
echo $html;