<?php
// 
$pageName = "Livre d'or";
require('./layouts/header.php');
require('./class/Form.php');
require('./class/Message.php');
require('./class/HandlerFile.php');

$fileSaveMessages = new HandlerFile('files/Messages.txt');
$fileSaveMessages->open('open', 'r');
// HtmlElement::log($_POST);
// HtmlElement::log($_POST);

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
    Message::getMessage($_POST['username'], $_POST['message']);
    ?>
  </div>
</div>
