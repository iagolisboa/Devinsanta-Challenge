<?php

function challenge(int $initial, int $final, array $str)
{
    foreach(range($initial, $final) as $range){
        $range .= " - ";

        (!($range % 5))
            ? $range .= $str[0]
            : null;
        
        (!($range % 6) && !($range % 5) || !($range % 6))
            ? $range .= $str[1]
            : null;
    
        print($range . PHP_EOL);
    };
}

challenge(1, 200, ['Santa', 'rem']);