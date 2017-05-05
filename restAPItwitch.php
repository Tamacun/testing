<?php
 $channelsApi = 'https://api.twitch.tv/kraken/channels/';
 $channelName = 'lirik';
 $clientId = 'oyj61dgilr24sjc6buhbs1148xde8z';
 $ch = curl_init();
 
 curl_setopt_array($ch, array(
    CURLOPT_HTTPHEADER => array(
       'Client-ID: ' . $clientId
    ),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $channelsApi . $channelName
 ));
 
 $response = curl_exec($ch);
 




$webhook = fopen('php://input' , 'rb');
while (!feof($webhook)) {
    $webhookContent .= fread($webhook, 4096);
    $json = json_decode($webhookContent, true);

$webhookContent = "";
$content = "some text here1".$webhookContent; 
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/myText.txt","wb");
fwrite($fp,$content); 
fclose($fp);
}
curl_close($ch);
?>