<h1>Yoo! 2019</h1>
<?php
require 'config.php';
require 'line-bot-sdk-php-master/line-bot-sdk-tiny/LineBotTiny.php';
?>

<?php
  $content = file_get_contents("php://input");
  $events = json_decode($content,true);
  echo "again!";
?>
