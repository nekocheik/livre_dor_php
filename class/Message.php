<?php
require_once './class/HtmlElement.php';
class Message extends HtmlElement {

  static function getMessage ($username = '', $message = '') {
    return self::createElement(
    'div', 
    [ 'class' => 'bg-light container'], 
    self::createMesage(['Username' => $username, 'Message' => $message])
  );
  }

  private function createMesage ($childsContent) {
    return [
      self::createChildElement('p', [ 'class' => 'h4 pt-3' ], $childsContent['Username']),
      self::createChildElement('p', [ 'class' => 'py-3' ], $childsContent['Message']),
    ];
  }

  public function getMessages ( $messages = [] ) : string {
    $messagesToString = '';
    foreach ($messages as $message) {
      $messagesToString .= self::getMessage( $message['username'], $message['message'] );
    }
    return messagesToString;
  }
}
