<?php

	class BotResponse {

		public function reply($text, $choise = null){

			$response = "";

			if($text == "/start" || $text == "/start start"){

				$response = "Benvenuto nel bot 'Mini Giochi'!\n\nQuesto bot contiene dei mini giochi per passare il tempo\nAltri giochi verrano aggunti nel corso del tempo\n\nGiochi disponibili:\n- carta forbice sasso";
			} else if($text == "/aiuto" || $text == "AIUTO") {
				$response = "Con questo bot puoi giocare tranquillamente a carta forbice sasso\nCol tempo verranno aggiunti altri nuovi giochi";
			} else if($text == "/credits" || $text == "CREDITS"){
				$response = "Realizzato da 'It Just Works'.\nScopri di più su www.itjustworks.it\no metti 'Mi piace' sulla nostra pagina facebook https://www.facebook.com/itjustworksteam";
			} else {
				$symbols = array("carta", "forbice", "sasso");
				$computerchoise = "";
				if($choise == null) {
					$choise = mt_rand(0, 2);
					$computerchoise = $symbols[$choise];
				} else {
					$computerchoise = $choise;
				}
		        $humanchoise = strtolower($text);
		        $response = "Tu hai scelto: ".$humanchoise."\n\n";
		        $response .= "Il computer ha scelto: ".$computerchoise."\n\n";
		        if($computerchoise === $humanchoise)
		        {
		            $response .= "Risultato: Pareggio!\n";
		        }
		        else if($humanchoise === "carta" && $computerchoise === "forbice")
		        {
		            $response .= "Risulutato: Hai Perso!\n";
		        }
		        else if($humanchoise === "carta" && $computerchoise === "sasso")
		        {
		            $response .= "Risultato: Hai Vinto!\n";
		        }
		        else if($humanchoise === "forbice" && $computerchoise === "carta")
		        {
		            $response .= "Risultato: Hai Vinto!\n";
		        }
		        else if($humanchoise === "forbice" && $computerchoise === "sasso")
		        {
		            $response .= "Risultato: Hai Perso!\n";
		        }
		        else if($humanchoise === "sasso" && $computerchoise === "carta")
		        {
		            $response .= "Risultato: Hai Perso!\n";
		        }
		        else if($humanchoise === "sasso" && $computerchoise === "forbice")
		        {
		            $response .= "Risultato: Hai Vinto!\n";
		        }
		    }
			return $response;
		}

	}

?>
