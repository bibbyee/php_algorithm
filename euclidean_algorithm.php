<?php
/**
 * 欧几里得算法
 */
function gcd($a, $b){
    if($a%$b != 0){
        return gcd($b, ($a%$b));
    }
    return $b;
}

$a = 49*109192;
$b = 49;

echo gcd($a, $b);
echo PHP_EOL;
exit();
