<?php

require('./app/config.php');
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

$messageSuccess = false;
if ($_POST && isset($_POST['message']) && isset($_POST['username'])) {
  $message = htmlentities($_POST['message']);
  $username = htmlentities($_POST['username']);
  $query = $pdo->prepare('insert posts SET username = :username, post = :message');
  $query->execute([
    'username'=> $username,
    'message' => $message
  ]);
  $messageSuccess = true;
}


// $messagesSave[] = 
$query = $pdo->prepare('SELECT * FROM posts',[PDO::FETCH_ASSOC]);
$query->execute();
$messagesSave = $query->fetchAll();


?>
<div class="container">
  <?php if ($messageSuccess) : ?>
  <div class="success alert-success p-2 m-2"> Votre post a était ajouté </div> 
  <?php endif ?>
  <form method="post">
    <div class="col-sm">
      <?php
      $form = new Form();
      $form->addfield('Username');
      $form->addfield('Message','textarea');
      $form->addButton('Message','submit');
      echo $form->close();
      ?>
    </div>
  </form>
</div>

<div class="container pt-3">
  <div class="col-sm">
    <h3>Messages :</h3>
    <?php
    echo Message::getMessages($messagesSave);
    ?>
  </div>
</div>
