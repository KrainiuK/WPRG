<?php
    function changenumber($array, $n)
    {
        if (count($array) - 1 > $n && $n >= 0) {
            $array[$n] = "$";
            for ($i = 0; $i < count($array); $i++) {
                echo $array[$i];
            }
        }
        else echo "Blad";

    }
    changenumber([1,2,3,4,5,6], 4);