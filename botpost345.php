<?php

    require_once 'connect.inc.php';
    require_once 'Telegram.php';
    require_once 'src/BotResponse.php';

    $telegram = new Telegram(BotId);
    $text = $telegram->Text();
    $chat_id = $telegram->ChatID();
    $bot = new BotResponse();
    $response = $bot->reply($text);

    send($telegram, $chat_id, $response);

    function send($telegram, $chat_id, $response){
        $option = array(array("CARTA","FORBICE", "SASSO"), array("CREDITS", "AIUTO"));
        $keyb = $telegram->buildKeyBoard($option, $onetime=FALSE);
        $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => $response);
        $telegram->sendMessage($content);
    }

?>
