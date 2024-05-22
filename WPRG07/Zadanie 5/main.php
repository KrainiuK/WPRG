<?php
    $x = $_GET['a'];
    $y = $_GET['b'];
    if ((!$x && $x != 0) || (!$y && $y != 0)) {
        $error = "Nie wszystkie dane wprowadzone";
    }
    if(isset($error)){
        echo $error;
    }
    else {

        switch ($_GET['operation']) {
            case 'Dodawanie':
                $c = $x + $y;
                echo "$x + $y = $c";
                break;
            case 'Odejmowanie':
                $c = $x - $y;
                echo "$x - $y = $c";
                break;
            case 'Mnożenie':
                $c = $x * $y;
                echo "$x * $y = $c";
                break;
            case 'Dzielenie':
                if ($y = 0) {
                    echo "Nie mozna dzielic przez zero";
                    break;
                }
                $c = $x / $y;
                echo "$x / $y = $c";
                break;
        }

        $f = $_GET['c'];
        switch ($_GET['operation1']) {
            case 'Cosinus':
                $d = cos($f);
                echo "Cosinus $f = $d";
                break;
            case 'Sinus':
                $d = sin($f);
                echo "Sinus $f = $d";
                break;
            case 'Tangens':
                $d = tan($f);
                echo "Tangens $f = $d";
                break;
            case'Binarne na dziesiętne':
                $d = bindec($f);
                echo "dziesietna postac to $d";
                break;
            case 'Dziesiętne na binarne':
                $d = decbin($f);
                echo "binarna postac to $d";
                break;
            case 'Dziesiętne na szesnastkowe':
                $d = dechex($f);
                echo "szesnastkowe postac to $d";
                break;
            case 'Szesnastkowe na dziesiętne':
                $d = hexdec($f);
                echo "dziesietna postac to $d";
                break;
        }
    }
