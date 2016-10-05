# MINIGIOCHI BOT #

A simple Telegram bot written in PHP where you can play Rock-paper-scissors.

[![Build Status](https://travis-ci.org/itjustworksteam/minigiochibot.svg?branch=master)](https://travis-ci.org/itjustworksteam/minigiochibot)

## GETTING STARTED ##

On Telegram:

* start a chat with the BotFather
* use the command ```/newbot```to create a new bot
* give it a name
* give it a unique identifier that ends with the word ```bot```
* Remember the bot token that Telegram gives to you if all go right

On your laptop/server:

* clone the repo
* open the ```connect.inc.php```
* insert the telegram token and a version if you want
* upload the code to your webserver or run it locally
* set the webhook for the bot with this command: ```php setwebhook.php <YOUR_SERVER_URL>/botpost345.php```

I recommend to see the [Telegram API](https://core.telegram.org/bots/api)
