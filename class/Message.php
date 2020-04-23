<?php
require_once './class/HtmlElement.php';
class Message extends HtmlElement {
  protected static function getMessage ($text) {
    return self::createElement('div', [ 'class' => 'mr-md-3 bg-light container'], $text);
  }
}