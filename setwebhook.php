<?php

	require_once 'connect.inc.php';
	require_once 'Telegram.php';

	$url = "";

	if($argv[1] == "") {
		$url = "";
	} else {
		$url = $argv[1];
	}

	$telegram = new Telegram(BotId);
	echo json_encode($telegram->getMe());
	echo json_encode($telegram->setWebhook($url));
	echo "\n";

?>