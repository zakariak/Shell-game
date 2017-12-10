<?php
/**
 *
 */
class Ball
{

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

  public function show() {
    echo '<div class="ball ' . self::$color .'"></div>';
  }

}
 ?>
