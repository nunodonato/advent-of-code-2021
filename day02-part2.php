<?php
declare(strict_types=1);

/*  Advent of Code 2021 - Day 2, Part 2 */

/*
create a string by concatenating this file's name to "inputs/" and setting a 'txt' extension
use that string to open a file and map the word an number in each line to an array with key value pairs

It seems like the submarine can take a series of commands like 'forward 1', 'down 2', or 'up 3':
In addition to horizontal position and depth, you'll also need to track a third value, aim, which also starts at 0.

The commands also mean something entirely different than you first thought:

    down X increases your aim by X units.
    up X decreases your aim by X units.
    forward X does two things:
        1. It increases your horizontal position by X units.
        2. It increases your depth by your aim multiplied by X.
Using this new interpretation of the commands, calculate the horizontal position and depth you would have after following the planned course. What do you get if you multiply your final horizontal position by your final depth?
*/

$input_file = 'inputs/' . basename(__FILE__, '.php') . '.txt';

$input = file($input_file, FILE_IGNORE_NEW_LINES);

$x = 0;
$y = 0;
$z = 0;

$aim = 0;

foreach ($input as $line) {
    $command = explode(' ', $line);

    switch ($command[0]) {
        case 'down':
            $aim += $command[1];
            break;
        case 'up':
            $aim -= $command[1];
            break;
        case 'forward':
            $x += $command[1];
            $y += $command[1] * $aim;
            break;
    }
}

echo $x * $y;
