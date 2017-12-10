<?php
/**
 *
 */
class Ball
{

<<<<<<< HEAD
   static public $color;

   public function __construct($color)
   {
     self::$color = $color;
   }

   public static function setColor($color) {
     self::$color = $color;
   }

   static public function getColor() {
      self::$color;
   }
=======
  public $color;

  public function __construct($color)
  {
    $this->color = $color;
  }
>>>>>>> 6bf3a0a058df83db053f4e03bc76e6a0401e6cc8

  public function show() {
    echo '<div class="ball ' . self::$color .'"></div>';
  }

}
 ?>
