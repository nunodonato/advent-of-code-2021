<?php
declare(strict_types=1);

/*  Advent of Code 2021 - Day 3, Part 1 */

/*
create a string by concatenating this file's name to "inputs/" and setting a 'txt' extension.
use that string to open a file read each line as a string and store it in the input array.
Iterate the array and count the number of times each character occurs in each position of the strings.
After having the total number of occurrences of each character, create a string 'v1' using the character with the most occurences in each position.
Create a string 'v2' using the character with the least occurences in each position.
The number 'n1' is obtained by converting the 'v1' string from binary to decimal.
Print n1
The number 'n2' is obtained by converting the 'v2' string from binary to decimal.
Print n2
Multiply n1 by n2 and print the result
*/

$ocurrences = [];
$input = [];
$v1 = '';
$v2 = '';
$n1 = 0;
$n2 = 0;
$result = 0;

$file = file_get_contents(__DIR__ . '/inputs/' . basename(__FILE__, '.php') . '.txt');
$input = explode("\n", $file);

foreach ($input as $line) {
    for ($i = 0; $i < strlen($line); $i++) {
        if (!isset($ocurrences[$i])) {
            $ocurrences[$i] = [];
        }
        if (!isset($ocurrences[$i][$line[$i]])) {
            $ocurrences[$i][$line[$i]] = 0;
        }
        $ocurrences[$i][$line[$i]]++;
    }
}

foreach ($ocurrences as $ocurrences_line) {
    $char = array_keys($ocurrences_line, max($ocurrences_line));
    $v1 .= $char[0];
}

foreach ($ocurrences as $ocurrences_line) {
    $char = array_keys($ocurrences_line, min($ocurrences_line));
    $v2 .= $char[0];
}

$n1 = bindec($v1);
$n2 = bindec($v2);

$result = $n1 * $n2;

echo $result;
