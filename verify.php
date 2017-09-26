<?php
$access_token = 'yhTnvirBNNgU9cWjVEGouJkW1ld6uTWtQRbmyEHU6x4RbFp/0sFhSdtVutwIKdXXv7ugmPm1JucjDrAjfgPAZ6pB9CNhBucUYHmEyVolW1/HbLB6czWwC1a6oHgfvOIldzFiSnrZ/Tg1VwNGqHUW+gdB04t89/1O/w1cDnyilFU=';

$proxy = 'proxyurl:port';
$proxyauth = 'username:password';
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_close($ch);

echo $result;
