<?php
require_once 'chat_model.php';
$chat=Chat::getInstance();
$chat->reset();

header('Location:index.php');