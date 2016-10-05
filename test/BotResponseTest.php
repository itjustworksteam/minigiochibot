<?php

	class BotResponseTest extends PHPUnit_Framework_TestCase {

		public function testClassExists() {
			$response = new BotResponse();
		}

		public function testStartReply() {
			$response = new BotResponse();
			$this->assertEquals("Benvenuto nel bot 'Mini Giochi'!\n\nQuesto bot contiene dei mini giochi per passare il tempo\nAltri giochi verrano aggunti nel corso del tempo\n\nGiochi disponibili:\n- carta forbice sasso", $response->reply("/start"));
		}

		public function testAvviaReply() {
			$response = new BotResponse();
			$this->assertEquals("Benvenuto nel bot 'Mini Giochi'!\n\nQuesto bot contiene dei mini giochi per passare il tempo\nAltri giochi verrano aggunti nel corso del tempo\n\nGiochi disponibili:\n- carta forbice sasso", $response->reply("/start start"));
		}

		public function testAiutoReply() {
			$response = new BotResponse();
			$this->assertEquals("Con questo bot puoi giocare tranquillamente a carta forbice sasso\nCol tempo verranno aggiunti altri nuovi giochi", $response->reply("/aiuto"));
			$this->assertEquals("Con questo bot puoi giocare tranquillamente a carta forbice sasso\nCol tempo verranno aggiunti altri nuovi giochi", $response->reply("AIUTO"));
		}

		public function testCreditsReply() {
			$response = new BotResponse();
			$this->assertEquals("Realizzato da 'It Just Works'.\nScopri di più su www.itjustworks.it\no metti 'Mi piace' sulla nostra pagina facebook https://www.facebook.com/itjustworksteam", $response->reply("/credits"));
			$this->assertEquals("Realizzato da 'It Just Works'.\nScopri di più su www.itjustworks.it\no metti 'Mi piace' sulla nostra pagina facebook https://www.facebook.com/itjustworksteam", $response->reply("CREDITS"));
		}

		public function testCartaReply() {
			$response = new BotResponse();
			$this->assertNotEquals("", $response->reply("CARTA"));
			$this->assertNotEquals("", $response->reply("CARTA", "carta"));
			$this->assertNotEquals("", $response->reply("CARTA", "forbice"));
			$this->assertNotEquals("", $response->reply("CARTA", "sasso"));
		}

		public function testSassoReply() {
			$response = new BotResponse();
			$this->assertNotEquals("", $response->reply("SASSO"));
			$this->assertNotEquals("", $response->reply("SASSO", "carta"));
			$this->assertNotEquals("", $response->reply("SASSO", "forbice"));
			$this->assertNotEquals("", $response->reply("SASSO", "sasso"));
		}

		public function testForbiceReply() {
			$response = new BotResponse();
			$this->assertNotEquals("", $response->reply("FORBICE"));
			$this->assertNotEquals("", $response->reply("FORBICE", "carta"));
			$this->assertNotEquals("", $response->reply("FORBICE", "forbice"));
			$this->assertNotEquals("", $response->reply("FORBICE", "sasso"));
		}
	}

?>
