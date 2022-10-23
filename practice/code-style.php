<?php

#camel case
$shippingCosts = 0;

#snake case
$shipping_costs = 0;

function getCelsius($temperature = null, $includeUnit = true)
{
    # https://en.wikipedia.org/wiki/Fahrenheit#Definition_and_conversion
    $result = ($temperature - 32) / 1.8;

    if ($includeUnit) {
        $result .= ' C';
    }

    return $result;
}


if ($total > 0) {
    $prefix = '+';
} else {
    $prefix = '-';
}
$prefix = (5> 10)? 9 : 10;

var_dump ((5> 10)? 9 : 10);