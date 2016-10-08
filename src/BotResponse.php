<?php

	class BotResponse {

		public function reply($text, $choise = null){

			$response = "";

			if($text == "/start" || $text == "/start start"){

				$response = "Welcome to 'Mini Giochi' bot!\n\nWith this bot you can play rock-paper-scissors. For more /help.";
			} else if($text == "/help" || $text == "HELP") {
				$response = "Simple rules:\nrock beats scissors\nscissiors beats paper\npaper beats rock";
			} else if($text == "/credits" || $text == "CREDITS"){
				$response = "Developed by 'It Just Works'. For more please visit www.itjustworks.it";
			} else if($text == "/feedback" || $text == "FEEDBACK") {
				$response = "If you have a question or you need an help. Please use our support bot: @itjustworksbot. We will reply you as soon as possible!";
			} else {
				$symbols = array("paper", "scissors", "rock");
				$computerchoise = "";
				if($choise == null) {
					$choise = mt_rand(0, 2);
					$computerchoise = $symbols[$choise];
				} else {
					$computerchoise = $choise;
				}
		        $humanchoise = strtolower($text);
		        $response = "Your choise: ".$humanchoise."\n\n";
		        $response .= "Computer choise: ".$computerchoise."\n\n";
		        if($computerchoise === $humanchoise)
		        {
		            $response .= "Result: Draw!\n";
		        }
		        else if($humanchoise === "paper" && $computerchoise === "scissors")
		        {
		            $response .= "Result: You lost!\n";
		        }
		        else if($humanchoise === "paper" && $computerchoise === "rock")
		        {
		            $response .= "Result: You win!\n";
		        }
		        else if($humanchoise === "scissors" && $computerchoise === "paper")
		        {
		            $response .= "Result: You win!\n";
		        }
		        else if($humanchoise === "scissors" && $computerchoise === "rock")
		        {
		            $response .= "Result: You lost!\n";
		        }
		        else if($humanchoise === "rock" && $computerchoise === "paper")
		        {
		            $response .= "Result: You Lost!\n";
		        }
		        else if($humanchoise === "rock" && $computerchoise === "scissors")
		        {
		            $response .= "Result: You win!\n";
		        }
		    }
			return $response;
		}

	}

?>
