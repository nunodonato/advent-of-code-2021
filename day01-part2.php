<?php
declare(strict_types=1);

/*  Advent of Code 2021 - Day 1, Part 2 */

// create a string by concatenating this file's name to "inputs/"
// use that string to open a file and fetch the values of each line into an array
// initialize a total counter to zero
// iterate the array until reaching the last-3 element
// store in counter A the sum of three values from the current position
// store in counter B the sum of three values from the next position
// if counter B is greater than counter A, increment the total by one
// print the result

$filename = 'inputs/' . basename(__FILE__, '.php') . '.txt';
$values = file($filename, FILE_IGNORE_NEW_LINES);
$total = 0;

for ($i = 0; $i < count($values) - 3; $i++) {
    $a = $values[$i] + $values[$i + 1] + $values[$i + 2];
    $b = $values[$i + 1] + $values[$i + 2] + $values[$i + 3];
    if ($b > $a) {
        $total++;
    }
}

echo $total;
