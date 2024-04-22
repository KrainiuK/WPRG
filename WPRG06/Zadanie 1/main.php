<?php 
function IsPrimeNumbers($num) {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function PrintPrimeNumbers($a, $b) {
    for ($i = $a; $i <= $b; $i++) {
        if (IsPrimeNumbers($i)) {
            echo $i . " ";
        }
    }
}

PrintPrimeNumbers(7, 100);
?>
