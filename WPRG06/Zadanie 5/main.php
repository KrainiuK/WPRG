<?php
function IsPangram($text) {
    $alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $text = strtolower($text);

    foreach ($alphabet as $letter) {
        if (strpos($text, $letter) === false) {
           echo "FALSE";
        }
    }
    echo "TRUE";
}

IsPangram("The quick brown fox jumps over the lazy dog");
