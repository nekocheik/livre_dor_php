<?php
// $_POST 
$pageName = "Livre d'or";
require('./layouts/header.php');
require('./class/Form.php');
require('./class/Message.php');

?>
<div class="container">
  <form method="post">
    <div class="col-sm">
      <?php
      Form::field('Username');
      Form::field('Message','textarea');
      Form::button('Message','submit');
      Message::getMessage('Message');
      ?>
    </div>
  </form>
</div>
