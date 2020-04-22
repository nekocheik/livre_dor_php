<?php
$pageName = "Livre d'or";
require('./layouts/header.php');
require('./class/Form.php');
?>
<div class="container">
  <form>
    <div class="col-sm">
      <?php
      Form::field('Username');
      Form::field('Message','textarea');
      Form::button('Message','submit');
      ?>
    </div>
  </form>
</div>