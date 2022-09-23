<?php

$moves = ['rock','paper','scissors']; #array of strings

$strawLengths = [2,2,2,2,2,1]; #array of ints

$mixed = ['rock',1,.04,true]; #array of mixed vars


#echo $moves[0]; #output rock to page

#var_dump($moves);

$randonmNumber = rand(0,2); #random numbers 0-2

$moves = $moves[$randonmNumber]; #randomly picks a move based off random generated num

#var_dump($moves); 

#Associative array

// $coin_values = [
//     'penny' => .01, 
//     'nickel' => .05,
//     'dime' => .1, 
//     'quarter' => .25
// ];

// #var_dump($coin_values['quarter']);

// $coin_counts = [
//     'penny' => 100,
//     'nickel'=> 25, 
//     'dime' => 100, 
//     'quarter' => 34
// ];

//asort($coin_counts); #sort smallest to largest value

//arsort($coin_counts); #sort largest to smallest value

//ksort($coin_counts); #sorts keys alphabetically 

//krsort($coin_counts); #reverse alphabetic sorting on key

// var_dump($coin_counts);


$total = 0; 

// foreach($coin_counts as $coin => $count){
   
//     $total = $total + ($count * $coin_values[$coin]);

// }

$coins = [
    'penny' => [100,.01],
    'nickel' => [25,.05],
    'dime' => [100,.1],
    'quarter' => [34,.25],
    'halfDollar' =>[10,.5]
];

foreach($coins as $coin => $info){
   
    $total = $total + ($info[0] * $info[1]);

}
//var_dump($total);

//shuffle deck of cards, splits in 2 and assign to compuer and player1
$cards = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];

shuffle($cards); #shuffles values of array 
// var_dump($cards);

$playerCards = array_splice($cards,0,count($cards)/2);
// var_dump($playerCards);
// var_dump($cards);
$computerCards = $cards;

//remove last card from P1s hand
//$playerDraw = $playerCards[count($playerCards)-1];
$playerDraw = array_pop($playerCards);
var_dump($playerCards);
var_dump($playerDraw);

//draw card for computer
$computerDraw = array_pop($computerCards);
var_dump($computerCards);
var_dump($computerDraw);

//compare card values 