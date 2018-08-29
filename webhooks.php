<h1>Yoo! 2019</h1>
<?php
require 'config.php';
require 'line-bot-sdk-php-master/line-bot-sdk-tiny/LINEBotTiny.php';
?>

<?php

  $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_channel_access_token);
  $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_channel_secret]);

  $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Fresh Bakery');
  $response = $bot->pushMessage($_my_id, $textMessageBuilder);

  echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

?>
