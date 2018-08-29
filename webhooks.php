<h1>Yeah!</h1>
<?php
require "config.php";
require_once("line-bot-sdk-php-master/line-bot-sdk-tiny/LineBotTiny.php");
?>

<?php
  $content = file_get_contents("php://input");
  echo $content;
  print_r($content);
  echo date("H:i:s");
?>
