<?php
$access_token = 'P16B/i7iP6NyxMmL2cDfXPeOy0n0V3KrqBXcs1cVSpQ+IZVCs8aajyDbB/JlctMyACPrQ+T30KvpfDdYQNs+SQYxDb1ew5Hg1i8eERvgWBJVM8vPqlPrUpqkVB366JNWUp+lHe4Mqu0qvAynWAR/aQdB04t89/1O/w1cDnyilFU=';
$proxy = 'http://fixie:FWwieAEjnTaoGI4@velodrome.usefixie.com:80';
$proxyauth = 'http://fixie:FWwieAEjnTaoGI4@velodrome.usefixie.com:80';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
"events":["type":"message","timestamp":12345678901234,"source":{"type":"user","groupId":"userid"},
   "replyToken":"replytoken","message":{"id":"contentid","type":"image"}
  if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['message']['text'] == "สวัสดี"||$event['message']['text'] == "หวัดดี") {
			// Get text sent
			$text = "ดีจ้า ยินดีต้อนรับ^_^ \nมีอะไรให้เราช่วยมั้ย???";
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
			;echo $result . "\r\n";
		}
		else if ($event['message']['text'] == "เก็บรูป") {
			// Get text sent
			$text = "มาเริ่มกันเลย";
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
			;echo $result . "\r\n";
		}
		else if ($event['type'] == 'message' && $event['message']['type'] == 'image') {
			$event = $events[1];
            		$this->assertTrue($event->isUserEvent());
            		$this->assertEquals('groupid', $event->getUserId());
            		$this->assertEquals('groupid', $event->getEventSourceId());
            		$this->assertInstanceOf('LINE\LINEBot\Event\MessageEvent\ImageMessage', $event);
            		/** @var ImageMessage $event */
            		$this->assertEquals('replytoken', $event->getReplyToken());
            		$this->assertEquals('image', $event->getMessageType());
			;echo $result . "\r\n";
		}
		else if($event['message']['type'] == 'sticker') 
		{
			$text = "sticker";
			$replyToken = $event['replyToken'];
			$messages = [
				'type' => 'text',
				'text' => $text
			];
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
			;echo $result . "\r\n";
		}
		else
		{
			$text = "ไม่ทราบข้อมูล";
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
			;echo $result . "\r\n";
		
		}
	}
}
echo "OK";
