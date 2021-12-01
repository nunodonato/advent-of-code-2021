<?php
declare(strict_types=1);

/*  Advent of Code 2021 - Day 1, Part 1 */

// create a string by concatenating this file's name to "inputs/"
// use that string to open a file and fetch the values of each line into an array
// initialize a counter to zero
// when a value in the array is lower then the following value increment the counter by one
// print the result of the counter

$input = file_get_contents(__DIR__ . '/inputs/' . basename(__FILE__, '.php') . '.txt');
$input = explode("\n", $input);

$counter = 0;

for ($i = 0; $i < count($input) - 1; $i++) {
    if ($input[$i] < $input[$i + 1]) {
        $counter++;
    }
}

echo $counter;
