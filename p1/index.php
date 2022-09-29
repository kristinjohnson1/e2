<?php

//set array with moves
$moves = ['rock', 'paper','scissors'];

//assign random move to each player, set winner to empty string 
$player1 = $moves[rand(0,2)]; 
$player2 = $moves[rand(0,2)];
$winner = "";

//how player 1 can win & set winner to player 1
if($player1 == 'rock' && $player2 == 'scissors' || 
    $player1 == 'paper' && $player2 == 'rock' || 
    $player1 == 'scissors' && $player2 == 'paper' ){

   $winner = "Player 1 wins";
}
//if tie, set winner to tie
else if ($player1 == $player2){
    $winner = "Tie";
}
//else, player2 wins 
else{
    $winner = "Player 2 wins";
}

require 'index-view.php';
