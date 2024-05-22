<?php
//$string = readline('Enter a string');
$string = "423,543623";
$numbers = substr($string, strpos($string, ',') + 1);
echo strlen($numbers);
?>