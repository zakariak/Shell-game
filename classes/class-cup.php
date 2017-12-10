<?php
<<<<<<< HEAD
=======
/**
*
*/
>>>>>>> 6bf3a0a058df83db053f4e03bc76e6a0401e6cc8
class Cup
{

  public $color;
  public $type;
  public $positionLocation = 'putdown';
  public $ball = null;
  public $id;

  public function __construct($color, $type, $id)
  {
    $this->color = $color;
    $this->type = $type;
    $this->id = $id;
  }

  public function liftUp() {
    $this->positionLocation = 'liftup';
  }

  public function putDown() {
    $this->positionLocation = 'putdown';
  }

  public function show() {
    if($this->ball != null) {
<<<<<<< HEAD
    echo '<div class="cup ' . $this->color . ' ' . $this->positionLocation . '">' . '<div class="ball' . Ball::getColor() . '"></div>' . '</div>';
  }else {
    echo '<div class="cup ' . $this->color . ' ' . $this->positionLocation . '"></div>';
=======
      return '<a href="' . $this->id . '" class="cup ' . $this->color . ' ' . $this->positionLocation . '">' . '<div class="ball red"></div>' . '</a>';
    }else {
      return '<a href="' . $this->id . '" class="cup ' . $this->color . ' ' . $this->positionLocation . '"></a>';
    }
>>>>>>> 6bf3a0a058df83db053f4e03bc76e6a0401e6cc8
  }

}
?>
