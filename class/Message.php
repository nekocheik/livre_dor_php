<?php
require_once './class/HtmlElement.php';
class Message extends HtmlElement {

  static function getMessage ($username = '', $message = '') {
    return self::createElement(
    'div', 
    [ 'class' => 'bg-light container py-4 m-4'], 
    self::createMesage(['Username' => $username, 'Message' => $message])
  );
  }

  private function createMesage ($childsContent) {
 //   var_dump($childsContent['Message']);
    return [
      self::createElement('p', [ 'class' => 'h4 pt-3' ], $childsContent['Username']),
      self::createElement('p', [ 'class' => 'py-3' ], $childsContent['Message']),
      self::createElement( 'button', [ 'class' => 'btn btn-primary' ], 'voir le post' )
    ];
  }

  public function getMessages ( $messages = [] ) : string {
    $messagesToString = '';
    foreach ($messages as $message) {
      $messagesToString .= self::getMessage( $message['username'], $message['post'] );
    }
    return $messagesToString;
  }
}
