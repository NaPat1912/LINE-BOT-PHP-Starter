<?php
$access_token = 'P16B/i7iP6NyxMmL2cDfXPeOy0n0V3KrqBXcs1cVSpQ+IZVCs8aajyDbB/JlctMyACPrQ+T30KvpfDdYQNs+SQYxDb1ew5Hg1i8eERvgWBJVM8vPqlPrUpqkVB366JNWUp+lHe4Mqu0qvAynWAR/aQdB04t89/1O/w1cDnyilFU=';
$proxy = 'http://fixie:FWwieAEjnTaoGI4@velodrome.usefixie.com:80';
$proxyauth = 'http://fixie:FWwieAEjnTaoGI4@velodrome.usefixie.com:80';

// Get POST body content
$post = file_get_contents('php://input');
$urlReply = 'https://api.line.me/v2/bot/message/reply';
		function postMessage($token,$packet,$urlReply){
 		$dataEncode = json_encode($packet);
 		$headersOption = array(‘Content-Type: application/json’,’Authorization: Bearer ‘.$token);
	
			{“events”:[{“type”:”message”,”replyToken”:”ไม่บอก”,”source”:
				   {“userId”:”ไม่บอก”,”type”:”user”},”timestamp”:1477132643802,
				    ”message”:{“type”:”text”,”id”:”5094630491076",”text”:”ว่าไงท่าน”}}]}
			$res = json_decode($post, true);
			if(isset($res[‘events’]) && !is_null($res[‘events’])){
 				foreach($res[‘events’] as $item){
 				if($item[‘type’] == ‘message’){
 					switch($item[‘message’][‘type’]){
 					case ‘text’:
					break;
					case ‘image’:
					break;
 					case ‘video’:
 
 					break;
 					case ‘audio’:
 
 					break;
 					case ‘location’:
					break;
 					case ‘sticker’:

 					break;
					}
		function getSticker($replyToken){
 		$sticker = array(
 		‘type’ => ‘sticker’,
 		‘packageId’ => ‘4’,
 		‘stickerId’ => ‘300’
 		);
 		$packet = array(
 		‘replyToken’ => $replyToken,
 		‘messages’ => array($sticker),
 		);
 		return $packet;
		}
		
		$packet = getSticker($item[‘replyToken’]);
 		postMessage($token,$packet,$urlReply);
			
			$ch = curl_init($urlReply);
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
