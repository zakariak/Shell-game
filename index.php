<?php
include 'classes/class-ball.php';
include 'classes/class-player.php';
include 'classes/class-cup.php';


$ball = new ball();
$ball->color = 'red';
  // $ball->show();

$player = new Player();
$player->name = 'Zakaria';
$player->amount = 100;
// $player->show();

$cup1 = new Cup('yellow', 'plastic');
$cup1->ball = $ball;
$cup1->liftup();

$cup2 = new Cup('yellow', 'plastic');
$cup2->putdown();

$cup3 = new Cup('yellow', 'plastic');
$cup3->putdown();

include 'view/view.php';
 ?>
