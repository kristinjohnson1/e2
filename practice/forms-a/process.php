<?php

$answer = $_POST['answer'];
var_dump($answer);

if($answer == 'pumpkin'){
    $correct = true;
}
else{
    $correct = false;
}

require "process-view.php";