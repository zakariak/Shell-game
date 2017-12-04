<?php
/**
 *
 */
class Cup
{

  public $color;
  public $type;
  public $positionLocation = 'putdown';
  public $ball = null;

  public function __construct($color, $type)
  {
    $this->color = $color;
    $this->type = $type;
  }

  public function liftUp() {
  $this->positionLocation = 'liftup';
}

  public function putDown() {
  $this->positionLocation = 'putdown';
}

  public function show() {
    if($this->ball != null) {
    echo '<div class="cup ' . $this->color . ' ' . $this->positionLocation . '">' . '<div class="ball red"></div>' . '</div>';
  }else {
    echo '<div class="cup ' . $this->color . ' ' . $this->positionLocation . '"></div>';
  }

}

}
 ?>
