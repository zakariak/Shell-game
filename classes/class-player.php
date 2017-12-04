<?php

/**
 *
 */
class Player
{

  public $name = '';
  public $amount = 0;

  public function __construct($name, $amount)
  {
    $this->name = $name;
    $this->amount = $amount;
  }

    public function show() {
      echo '<div class="player"> <strong>' . $this->name . ':' . $this->amount . '</strong> </div>';
    }
}


 ?>
