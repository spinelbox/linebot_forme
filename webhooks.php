<?php
  require "vendor/autoload.php";
  require "config.php";

  $access_token = 'uyUFfjl3b6iYVEUmm+MsBvX9kej70pMaYTTFsbt9LbPRSKfmlCWzPO1Bp3/LYU26VKEw36Hq4Zu7B1gCay+ZH1cmeg/ZENxEt3r3+MCIKpWG/GfdC2MDQOSRw2WCnKhLdVOU7rVSYt6mJFnZ6myTCAdB04t89/1O/w1cDnyilFU=';
  $channelSecret = 'aa57db0a9b1b63f26f1471188607e231';
  $pushID = 'U7634b7c4b1841c49db3e715782b958db';

  $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
  $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
  $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world again');
  $response = $bot->pushMessage($pushID, $textMessageBuilder);
  echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
