<?php

class HandlerFile {
  function __construct ($file) { 
    $this->path = $this->getAbsolutPath($file);
  }
  static function getAbsolutPath ($path) {
     return dirname(__DIR__) . DIRECTORY_SEPARATOR . $path;
  }

  static function action ( $parms, $callback) {
    self::open($parms);
    $callback('naruto');
    self::close();
  }

  public function open ($parms = "r") { 
    var_dump($this->path);
    fopen($this->path, 'r' );
  }

  static function close ($pathFile) { 
    fclose($pathFile ? $pathFile : self::path);
  }

  function toString () {

  } 

  function toArray () {

  }
}

?>
