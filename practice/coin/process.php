<?php

session_start();

$choice = $_POST['choice'];

$flip = ['heads','tails'][rand(0, 1)]; #heads or tails

$winner = $choice == $flip;


$_SESSION['results'] = [
    'winner' => $winner,
    'flip' => $flip,
    'choice' => $choice
];

#var_dump($_SESSION);
header('Location: index.php');