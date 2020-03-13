<?php 
$down = '999999999'.'925'; //Mbps . Decimal 
$up = '999'.'794';  //Mbps . Decimal 
$ping = 10; 
$server = '3728'; 
$accuracy = 8; 
$hash = md5("$ping-$up-$down-297aae72"); 
$headers = Array( 
        'POST /api/api.php HTTP/1.1', 
        'Host: www.speedtest.net', 
        'User-Agent: DrWhat Speedtest', 
        'Content-Type: application/x-www-form-urlencoded', 
        'Origin: http://c.speedtest.net', 
        'Referer: http://c.speedtest.net/flash/speedtest.swf', 
        'Cookie: ' . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9), // change this for history tests 
        'Connection: Close' 
    ); 
    $post = "startmode=recommendedselect&promo=&upload=$up&accuracy=$accuracy&recommendedserverid=$server&serverid=$server&ping=$ping&hash=$hash&download=$down"; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, 'http://www.speedtest.net/api/api.php'); 
    curl_setopt($ch, CURLOPT_ENCODING, "" ); 
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1); 
    $data = curl_exec($ch); 
    foreach (explode('&', $data) as $chunk) { 
        $param = explode("=", $chunk); 
        if (urldecode($param[0])== "resultid"){ 
			header("Location: https://www.speedtest.net/result/" . urldecode($param[1]) . ".png");
			die();
        } 
    } 
?>