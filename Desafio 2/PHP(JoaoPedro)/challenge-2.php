<?php

function challenge($initial, $final, $exponent)
{
    $bases = [];

    for ($i=$initial; $i < ($final+1); $i++) { 
        array_push($bases, $i);
    }

    $exponentiation = array_map(function($bases) use ($exponent){
        return pow($bases, $exponent);
    }, $bases);

    print_r(array_combine($bases, $exponentiation));
}

challenge(2, 300, 2);