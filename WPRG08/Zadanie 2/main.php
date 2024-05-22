<?php
$string = readline('Enter a string: ');
//$string = "123\\\:?\"<>|+-";
echo $string . "\n";
echo str_replace(array('\\','/',':','*','?','"','<', '>', '|','+','-'), '', $string);
?>