<?php
$access_token = 'aHuZv2FwsC/rpe5+/Tewg3i/iVFsM0pMIwEAt/z11CeD2b1Cs05Kq0W+C9s+mEp3YJH6FTRlxQNBh5wC9rfE/IkSwYnhCvFYIWZMr+TG+YjHfMBjM9Wkk1eCANkxYxpb+q/o3cC5ydNAmfHuQ7GeTgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
