<?php
include "Telegram.php";
$telegram = new Telegram('7803832672:AAHtb61MNmxGJv_ag4daCwvhVDZpy99ulrU');

$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Test');
$telegram->sendMessage($content);
