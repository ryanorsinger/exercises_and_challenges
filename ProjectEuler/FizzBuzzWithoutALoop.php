<?php

// Do FizzBuzz without any loops!
// Fizzbuzz starts at 1 and goes to 100
// Multiples of 3 should output "Fizz", Multiples of five should output "Buzz"
// Multiples of both 3 and 5 output "FizzBuzz", and other numbers output that number's value.

$i = 1;

function recurFizzBuzz($i)
{
    echo outputAppropriateResponse($i) . "\n";

    if ($i < 100) {
        $i = $i + 1;
        return recurFizzBuzz($i);
    }

    return;
}

function outputAppropriateResponse($i)
{
    if ($i % 15 == 0)
        return "FizzBuzz!";
    if ($i % 3 == 0)
        return "Fizz";
    if ($i % 5 == 0)
        return "Buzz";

    return "$i";
}

recurFizzBuzz($i);
