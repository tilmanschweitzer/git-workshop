<?php

class FizzBuzz
{

    public function fizz_buzz($n)
    {
        $fizzBuzz = "";

        if ($n % 3 == 0) {
            $fizzBuzz = "Fizz";
        }
        if ($n % 5 == 0) {
            $fizzBuzz = $fizzBuzz . "Buzz";
        }
        return $fizzBuzz ? $fizzBuzz : $n;
    }

}

/*
// Beispiel ohne Funktion (schlecht testbar)
$n = 100;

for ($i = 1; $i <= $n; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        print "FizzBuzz";
    } else if ($i % 3 == 0) {
        print "Fizz";
    } else if ($i % 5 == 0) {
        print "Buzz ";
    } else {
        print $i;
    }

    print "\n";
}
*/

/*
// Beispiel mit Funktion (gut testbar)

$n = 100;

$fizzBuzz = new FizzBuzz();

for ($i = 1; $i <= $n; $i++) {

    print $fizzBuzz->fizz_buzz($i) . "\n";
}
*/
