<?php


// The prime factors of 13195 are 5, 7, 13 and 29.
// What is the largest prime factor of the number 600851475143 ?

$number = 13195;
$primeFactors = [];

for($i=2; $i<$number; $i++)
{
    if(returnPrime($number, $i)) {
        $primes[] = $i;
    }
}


function returnPrime($number, $i)
{
    if ($number % $i == 0) {
        return $i;
    }
}


var_dump($primeFactors);
