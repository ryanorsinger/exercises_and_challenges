<?php

// The prime factors of 13195 are 5, 7, 13 and 29.
// What is the largest prime factor of the number 600851475143 ?

// List all the primes under the given number.
// List all prime factors of the given number.
// Select the larget prime from that set of prime factors.

// Sieve of Eratosthenes steps:
// Step 1. Create a list of consecutive integers from 2 to n.
// Step 2. Set p = 2 for the first prime.
// Step 3. Starting from p, mark its multiples by counting to n in increments of p and mark them in the list.
// Step 4. Find the first unmarked number greater than p in the list.
// If there is no such number, stop.
// Otherwise, let p now equal this new number.

var $n = 13195;

$primeNumbers = sieve($n);

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
}
