<?php
    function createtable($a, $b, $c, $d){
        $table = [];
        $j = $c;
        for($i = $a; $i <= $b; $i++){
            $table[$i] = $j;
            $j++;
            if($j > $d) $j = $c;
        }
        foreach($table as $x){
            echo "$x, ";
        }
    }

    createtable(1,10,4,9);