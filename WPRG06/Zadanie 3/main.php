<?php
function multiply($matrix1, $matrix2){
    $rows1 = count($matrix1);
    $cols1 = count($matrix1[0]);
    $rows2 = count($matrix2);
    $cols2 = count($matrix2[0]);

    if ($cols1 != $rows2) {
        echo "Niepoprawne wymiary macierzy.";
        return false;
    }
    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            $sum = 0;
            for ($k = 0; $k < $cols1; $k++) {
                $sum += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
            $result[$i][$j] = $sum;
        }
    }
    return $result;
}
$matrix1 = array(
    array(12, 3, 5),
    array(10, 3, 2),
);

$matrix2 = array(
    array(1, 35),
    array(65, 43),
    array(4, 1),
);

print_r(multiply($matrix1, $matrix2));

