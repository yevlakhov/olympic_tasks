<?php

function printTree($height)
{
    $str = '';
    $i = 1;
    $m = 1;
    do {
        
        $margin = str_repeat(' ', $height - $m);
        $stars = str_repeat('*', $i);
        $str .= $margin . $stars . $margin . "\n";
        $i = $i + 2;
        $m++;
    } while ($i <= $height * 2);
    
    echo '<pre>'.$str.'<pre>';
    
    $str2 = '';
    $m = 1;
    for ($i = 1; $i <= $height * 2; $i = $i + 2) {
        $margin = str_repeat(' ', $height - $m);
        $str2 .= $margin . str_repeat('*', $i) . $margin . "\n";
        $m++;
    }
    
    echo '<pre>'.$str2.'<pre>';
}

printTree(5);