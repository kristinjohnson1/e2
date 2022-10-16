<?php

function checkNumber($guess, $mysterNumber)
{
    $example = 'abc';

    if ($guess == $mysterNumber) {
        return 'correct';
    } elseif ($guess > $mysterNumber) {
        return 'high';
    } else {
        return 'low';
    }
}

//var_dump(checkNumber(3,6)); #low
//var_dump(checkNumber(7,3)); #high
//var_dump(checkNumber(3,3)); #correct

//var_dump($example); //will throw error because it is only scope of function
