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

<<<<<<< HEAD
$ball = new ball('red');

$player = new Player('Zakaria', 100);
=======
for ($i=0; $i < count($Cups) ; $i++) {
  $Cups[$i]->putdown();
};

function startGame($Ball, $Cups) {
>>>>>>> 6bf3a0a058df83db053f4e03bc76e6a0401e6cc8

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

<<<<<<< HEAD

$cup2 = new Cup('yellow', 'plastic');
$cup2->putdown();
=======
function liftCupUp() {
>>>>>>> 6bf3a0a058df83db053f4e03bc76e6a0401e6cc8

}

<<<<<<< HEAD
function startGame() {
  // set all cups down
    $cup1->putdown();
    // $cup2->putdown();
    // $cup3->putdown();
}
startGame();

include 'view/view.php';
=======
  $gameView = startGame($Ball, $Cups);
include_once 'view/view.php';
>>>>>>> 6bf3a0a058df83db053f4e03bc76e6a0401e6cc8
 ?>
