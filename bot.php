<?php
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<P16B/i7iP6NyxMmL2cDfXPeOy0n0V3KrqBXcs1cVSpQ+IZVCs8aajyDbB/JlctMyACPrQ+T30KvpfDdYQNs+SQYxDb1ew5Hg1i8eERvgWBJVM8vPqlPrUpqkVB366JNWUp+lHe4Mqu0qvAynWAR/aQdB04t89/1O/w1cDnyilFU=>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<e6cd474bb7bb5368e1bc3ea48e92521c>']);
$access_token = 'P16B/i7iP6NyxMmL2cDfXPeOy0n0V3KrqBXcs1cVSpQ+IZVCs8aajyDbB/JlctMyACPrQ+T30KvpfDdYQNs+SQYxDb1ew5Hg1i8eERvgWBJVM8vPqlPrUpqkVB366JNWUp+lHe4Mqu0qvAynWAR/aQdB04t89/1O/w1cDnyilFU=';
$proxy = 'http://fixie:FWwieAEjnTaoGI4@velodrome.usefixie.com:80';
$proxyauth = 'http://fixie:FWwieAEjnTaoGI4@velodrome.usefixie.com:80';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data

if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		$myfile = fopen("logs.txt", "wr") or die("Unable to open file!");
		$txt = "user id date";
		fwrite($myfile, $txt);
		fclose($myfile);
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			
			
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			
			
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
			curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";
