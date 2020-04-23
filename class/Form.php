<?php
require './class/HtmlElement.php';
class Form extends HtmlElement {
  
  private function textarea ($name = '', $type = 'text') {
    return self::genForm([
      self::createChildElement('label',[ 'for' => "$name"], $name), 
      self::createChildElement('textarea', ['class' => 'form-control', 'name' => $name, type => '$type']), 
      ]);
  }
  
  
  private function genForm ($child) {
    $parmsFom = ['class' => 'form-group'];
    return self::createElement('div', $parmsFom , $child);
  }
  
  private function input ($name = '', $type = 'text') {
    // return self::genForm(self::createChildElement('input', ['class' => 'form-control', 'name' => $name, type => $type]));
    return self::genForm([
      self::createChildElement('label',['for' => $name], $name), 
      self::createChildElement('input', ['class' => 'form-control', 'name' => $name, type => $type]), 
      ]);
  }
  
  static function field ($name = '', $type = 'text') {
    if ( $type === 'textarea' ) {
      return self::textarea($name,$type);
    } else {
      return self::input($name,$type);
    }
  }
  
  static function button ($text = '', $action = 'submit') {
    $parmsButton = ['class' => 'btn btn-primary mb-2' , 'action' => action];
    self::createElement('button', $parmsButton , $text);
  }
  
}