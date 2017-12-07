<?php
/**
 *
 */
class Ball
{

  public $color;

  public function __construct($color)
  {
    $this->color = $color;
  }

  public function show() {
    echo '<div class="ball ' . self::$color .'"></div>';
  }

}
 ?>
