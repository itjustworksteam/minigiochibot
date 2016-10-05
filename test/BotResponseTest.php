<?php

	class BotResponseTest extends PHPUnit_Framework_TestCase {

		public function testClassExists() {
			$response = new BotResponse();
		}

		public function testStartReply() {
			$response = new BotResponse();
			$this->assertEquals("Welcome to 'Mini Giochi' bot!\n\nWith this bot you can play rock-paper-scissors. For more /help.", $response->reply("/start"));
		}

		public function testAvviaReply() {
			$response = new BotResponse();
			$this->assertEquals("Welcome to 'Mini Giochi' bot!\n\nWith this bot you can play rock-paper-scissors. For more /help.", $response->reply("/start start"));
		}

		public function testAiutoReply() {
			$response = new BotResponse();
			$this->assertEquals("Simple rules:\nrock beats scissors\nscissiors beats paper\npaper beats rock", $response->reply("/help"));
			$this->assertEquals("Simple rules:\nrock beats scissors\nscissiors beats paper\npaper beats rock", $response->reply("HELP"));
			// Simple rules:\nrock beats scissors\nscissiors beats paper\npaper beats rock.
		}

		public function testCreditsReply() {
			$response = new BotResponse();
			$this->assertEquals("Developed by 'It Just Works'. For more please visit www.itjustworks.it", $response->reply("/credits"));
			$this->assertEquals("Developed by 'It Just Works'. For more please visit www.itjustworks.it", $response->reply("CREDITS"));
		}

		public function testCartaReply() {
			$response = new BotResponse();
			$this->assertNotEquals("", $response->reply("PAPER"));
			$this->assertNotEquals("", $response->reply("PAPER", "paper"));
			$this->assertNotEquals("", $response->reply("PAPER", "scissors"));
			$this->assertNotEquals("", $response->reply("PAPER", "rock"));
		}

		public function testSassoReply() {
			$response = new BotResponse();
			$this->assertNotEquals("", $response->reply("ROCK"));
			$this->assertNotEquals("", $response->reply("ROCK", "paper"));
			$this->assertNotEquals("", $response->reply("ROCK", "scissors"));
			$this->assertNotEquals("", $response->reply("ROCK", "rock"));
		}

		public function testForbiceReply() {
			$response = new BotResponse();
			$this->assertNotEquals("", $response->reply("SCISSORS"));
			$this->assertNotEquals("", $response->reply("SCISSORS", "paper"));
			$this->assertNotEquals("", $response->reply("SCISSORS", "scissors"));
			$this->assertNotEquals("", $response->reply("SCISSORS", "rock"));
		}
	}

?>
