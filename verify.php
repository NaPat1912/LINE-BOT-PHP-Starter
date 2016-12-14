<?php
$access_token = 'JnyIImZquOgntgTr4HZrnDiFsXt5YR908OXdtc4PFy/CHtNklIMEHohO53W2dChlACPrQ+T30KvpfDdYQNs+SQYxDb1ew5Hg1i8eERvgWBLgd6FnLv/vaxGNBS6JoO3jVfDf18W2dZe9Os1s3ASWggdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
