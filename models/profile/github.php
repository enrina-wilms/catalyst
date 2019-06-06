<?php

function getGithub($username){
	
	
	try{
				$opts = [
				'http' => [
						'method' => 'GET',
						'header' => [
								'User-Agent: PHP'
						]
				]
		];

		$context = stream_context_create($opts);

		$client_id = "Iv1.0d103609d79d0860";
		$client_secret = "82e8d7ce61a33a8acdeb364fec301afa904d86e1";

//		$api = "https://api.github.com/users/$username?client_id=$client_id&client_secret=$client_secret";
		$content = file_get_contents($api, false, $context);
		
		$json = json_decode($content);


		echo '<p><i class="fab fa-github  mr-2 dev-contact-icon"></i>GitHub Profile:</p>'
		.'<p>Username:&nbsp;' . '<a href="' . $json->html_url . '?tab=repositories' . '" class="dev-contact-info" target="_blank" style="display:inline">' . $json->login . '</a>' . '</p>'
		.'<p>Repositories:&nbsp;' . '<a href="' . $json->html_url . '?tab=repositories' . '" class="dev-contact-info" target="_blank" style="display:inline">' . $json->public_repos . '</a>' . '</p>'
		.'<p>Followers:&nbsp;' . '<a href="' . $json->html_url . '?tab=followers' . '" class="dev-contact-info" target="_blank" style="display:inline">' . $json->followers . '</a>' . '</p>'	;
			} catch (PDOException $e){
				$msg = $e->getMessage();
				echo $msg;
				exit();
			}
	
	
		
	
}
//		}//END OF FOREACH LOOP
