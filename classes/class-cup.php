<?php
/**
 *
 */
class Cup
{

  public $color = '';
  public $type = '';


  public function liftUp() {


  }

  public function putDown() {


  }

  public function show() {
    echo '<div class="cup ' . $this->color . '"></div>';

  }
}


 ?>
