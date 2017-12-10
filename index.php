<?php
include 'classes/class-ball.php';
include 'classes/class-player.php';
include 'classes/class-cup.php';


$ball = new ball('red');

$player = new Player('Zakaria', 100);

$cup1 = new Cup('yellow', 'plastic');
$cup1->ball = $ball;
$cup1->liftup();


$cup2 = new Cup('yellow', 'plastic');
$cup2->putdown();

$cup3 = new Cup('yellow', 'plastic');
$cup3->putdown();

function startGame() {
  // set all cups down
    $cup1->putdown();
    // $cup2->putdown();
    // $cup3->putdown();
}
startGame();

include 'view/view.php';
 ?>
