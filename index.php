<?php
include_once 'classes/class-Ball.php';
include_once 'classes/class-player.php';
include_once 'classes/class-cup.php';
// include_once 'classes/class-start.php';

$Ball = new Ball('red');
$player = new Player('Zakaria', 100);
$Cups[] = new Cup('yellow', 'plastic', 0);
$Cups[] = new Cup('yellow', 'plastic', 1);
$Cups[] = new Cup('yellow', 'plastic', 2);

for ($i=0; $i < count($Cups) ; $i++) {
  $Cups[$i]->putdown();
};

function startGame($Ball, $Cups) {

  // random puts ball under a cup
  $number = random_int(0, count($Cups) - 1);
  $view = '';
  for ($i=0; $i < count($Cups) ; $i++) {
    if ($number == $i) {
      $Cups[$i]->ball = $Ball;
    }
    $view .= $Cups[$i]->show();
  }
  return $view;
}

function liftCupUp() {

}

  $gameView = startGame($Ball, $Cups);
include_once 'view/view.php';
 ?>
