<?php


require "Number.php";
require "EvenNumber.php";

$example = new HES\Number(9);
$example2 = new HES\EvenNumber(9);

// var_dump($example->isValid());
//var_dump($example2->isValid()); 

$example ->test();
