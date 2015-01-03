<?php

// Sieve of Eratosthenes steps:
// Step 1. Create a list of consecutive integers from 2 to n.
// Step 2. Set p = 2 for the first prime.
// Step 3. Starting from p, mark its multiples by counting to n in increments of p and mark them in the list.
// Step 4. Find the first unmarked number greater than p in the list.
// If there is no such number, stop.
// Otherwise, let p now equal this new number.

$start = microtime(TRUE);

// $n = 600851475143;
$n = 13195;

function sieve($n)
{
    $prime = 2;

    $list = range($prime, $n);

    while(($prime * 2) < $n)
    {
        $primeNumbers[] = $prime;

        $multiples = range($prime, $n, $prime);

        $list = array_diff($list, $multiples);

        $prime = min($list);
    }

    return $primeNumbers;
};

$primeNumbers = sieve($n);

$end = microtime(TRUE);

$count = count($primeNumbers);

$totalTime = $end - $start;

echo "It took {$totalTime} seconds to generate {$count} prime numbers under n where n={$n}" . PHP_EOL;
