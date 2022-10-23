<?php

session_start();

$choice = $_POST['choice'];

$comp = ['rock', 'paper','scissors'][rand(0, 2)]; #generate computers pick

//how player 1 can win & set winner to player 1
if ($choice == 'rock' && $comp == 'scissors' ||
    $choice == 'paper' && $comp == 'rock' ||
    $choice == 'scissors' && $comp == 'paper') {
    $winner = "Player 1 wins";
}
//if tie, set winner to tie
elseif ($choice == $comp) {
    $winner = "Tie";
}
//else, comp wins
else {
    $winner = "Player 2 wins";
}

var_dump($choice);
var_dump($comp);
var_dump($winner);


$_SESSION['results'] = [
    'winner' => $winner,
    'comp' => $comp,
    'choice' => $choice
];
