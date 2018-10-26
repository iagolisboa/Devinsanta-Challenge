<?php

// source challenge 2
function challenge2(int $initial, int $final, int $exponent)
{
    $bases = [];

    for ($i=$initial; $i < ($final+1); $i++) { 
        array_push($bases, $i);
    }

    $exponentiation = array_map(function($bases) use ($exponent){
        return pow($bases, $exponent);
    }, $bases);

    // print_r to return
    return (array_combine($bases, $exponentiation));
}

// question 1
function fac(int $n)
{
    $product = [];

    foreach(range(1, $n) as $range){
        array_push($product, $range);
    }

    return array_product($product);
}

function challenge($fac)
{
    $result = array_map(function($fac){
        return fac($fac);
    }, $fac);

    return array_combine($fac, $result);
}

print_r(
    challenge(
        challenge2(2, 300, 2)
    )
);