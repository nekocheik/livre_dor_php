<?php
class HtmlElement {

  static function attributeToHtml($attributes) {
    $result = '';
    foreach ($attributes as $attribute => $value) {
      $result .= strtolower("$attribute=\"$value\"");
    }
    return $result;
  }

  protected function getElement ($tagName, $attributes = [], $content = '') {
    if (is_array($content)) {
      $contents = '';
      foreach ($content as $key => $value) {
        $contents .= $value;
      };
    }
    $content = isset($contents) ? $contents : $content;
    return "<$tagName ". self::attributeToHtml($attributes) .">". $content ."</$tagName>" ;
  }

  static function createChildElement ( $tagName, $attributes = [], $content = '' ) {
   return self::getElement($tagName, $attributes, $content) ;
  }

  static function createElement ( $tagName, $attributes = [], $content = '' ) {
    echo self::getElement($tagName, $attributes, $content) ;
  }

  static function log($attributes) {
    echo "<div class=\"container\"><pre class='pre-scrollable'><code>" , var_dump($attributes) , "</code></pre></div>";
  }
}