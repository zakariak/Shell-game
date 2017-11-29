<?php
/**
 *
 */
class Ball
{

  public $color = '';

  public function show() {
    echo '<div class="ball ' . $this->color .'"></div>';
  }

}
 ?>
