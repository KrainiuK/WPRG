<?php 
function PrintInfo($a, $b, $c){
    
    $sum1 = ($c/2) * (2*$a + ($c-1) * $b);
    $sum2 = $a* (1 - pow($b, $c)) / (1 - $b);
    echo "Suma ciągu arytmetycznego: $sum1<br>";
    echo "Suma ciągu geometrycznego: $sum2<br>";

}
PrintInfo(1, 2, 5);
?>