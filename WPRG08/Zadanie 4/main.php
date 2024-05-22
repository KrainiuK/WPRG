<?php
$string = readline('Enter a string');
$count = 0;
for ($i = 0; $i < strlen($string); $i++) {
    if(preg_match("/[aeiou]/",$string[$i])){
        $count++;
    }
}
echo $count;
?>