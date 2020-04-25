<?php
// 
$pageName = "Livre d'or";
require('./layouts/header.php');
require('./class/Form.php');
require('./class/Message.php');
require('./class/HandlerFile.php');

$filePath = 'files/Messages.txt';
$fileSaveMessages = new HandlerFile($filePath);
$messagesTojson = $fileSaveMessages->toArray('r');
$messagesSave = [];

foreach ($messagesTojson as $message) {
  $messagesSave[] = json_decode($message, true);
};

if ($_POST && isset($_POST['message']) && isset($_POST['username'])) {
  $message = htmlentities($_POST['message']);
  $username = htmlentities($_POST['username']);
  file_put_contents($filePath, json_encode(
    ['message' => $message, 'username' => $username]
   ). PHP_EOL , FILE_APPEND);
}


?>
<div class="container">
  <form method="post">
    <div class="col-sm">
      <?php
      Form::field('Username');
      Form::field('Message','textarea');
      Form::button('Message','submit');
      ?>
    </div>
  </form>
</div>

<div class="container pt-3">
  <div class="col-sm">
    <h3>Messages :</h3>
    <?php
    Message::getMessages($messagesSave);
    Message::getMessage($_POST['username'], $_POST['message']);
    ?>
  </div>
</div>
