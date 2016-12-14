<?php
$access_token = 'I+DEh81jpSlolMCbAASYPBm9C3F77jKr4NlFA9jtpNwtnbRvay7pvYyzfJz8RwelACPrQ+T30KvpfDdYQNs+SQYxDb1ew5Hg1i8eERvgWBJsiOfoNztwztmBIKC/2CjpU3e0Q2Zr4Opyc2HeJmmjLAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
