<?php

/**
 *
 */
class Player
{

  public $name = '';
  public $amount = 0;

    public function show() {
      echo '<div class="player"> <strong>' . $this->name . ':' . $this->amount . '</strong> </div>';
    }
}


 ?>
