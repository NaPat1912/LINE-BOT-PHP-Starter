<?php
$access_token = 'P16B/i7iP6NyxMmL2cDfXPeOy0n0V3KrqBXcs1cVSpQ+IZVCs8aajyDbB/JlctMyACPrQ+T30KvpfDdYQNs+SQYxDb1ew5Hg1i8eERvgWBJVM8vPqlPrUpqkVB366JNWUp+lHe4Mqu0qvAynWAR/aQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
