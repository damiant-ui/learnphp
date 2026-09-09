<?php
$numbers = array(1,2,3);
$numbers = [1,2,3];
var_dump($numbers[1]);
$numbers[2] = 5;
var_dump($numbers);
$test = [
    'name' => 'Damian',
    'age' => 19,
    1,
    2,
    3,
    'color' => 'red',
    'music' => 'rock',
    100 => 6,
    7,
];
var_dump($text);
var_dump($text['name']);

$combined = [1,2,3] + [4,5,6,7];
var_dump($combined);
array_push($test, 67, 'asd', 322);
unset($test[100]);
var_dump($test);
?>
