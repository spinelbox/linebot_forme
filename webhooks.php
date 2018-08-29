<h1>Yoo!</h1>
<?php
require "config.php";
require_once ("line-bot-sdk-php-master/line-bot-sdk-tiny/LineBotTiny.php");
?>

<?php
  $content = file_get_contents("php://input");
  $events = json_decode($content,true);

  var_dump($content);
  var_dump($events);
?>
