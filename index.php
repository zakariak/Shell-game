<?php
include 'view/view.php';
include 'classes/class-ball.php';
include 'classes/class-player.php';
include 'classes/class-cup.php';


$ball = new ball();
$ball->color = 'red';
$ball->show();

$player = new Player();
$player->name = 'Zakaria';
$player->amount = 100;
$player->show();

$cup = new Cup();
$cup->color = 'yellow';
$cup->type = 'plastic';
$cup->show();
 ?>
