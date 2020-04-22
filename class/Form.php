<?php
class Form {

  private function textarea ($name = '', $type = 'text') {
    echo <<<HTML
    <div class="form-group">
      <label for="$name">$name</label>
      <textarea class="form-control" name="$name"  type='$type'> </textarea>
    </div>
HTML;
  }

  private function input ($name = '', $type = 'text') {
    echo <<<HTML
    <div class="form-group">
      <label for="$name">$name</label>
      <input  class="form-control" name="$name"  type='$type'> </input>
    </div>
HTML;
  }

  static function field ($name = '', $type = 'text') {
    if ( $type === 'textarea' ) {
      return self::textarea($name,$type);
    } else {
      return self::input($name,$type);
    }
  }

  static function button ($text = '', $action = 'submit') {
    echo "<button class=\"btn btn-primary mb-2\" action=\"$action\">$text</button>";
  }

}