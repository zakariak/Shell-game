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
      return '<a href="' . $this->id . '" class="cup ' . $this->color . ' ' . $this->positionLocation . '">' . '<div class="ball red"></div>' . '</a>';
    }else {
      return '<a href="' . $this->id . '" class="cup ' . $this->color . ' ' . $this->positionLocation . '"></a>';
    }
  }

}
?>
