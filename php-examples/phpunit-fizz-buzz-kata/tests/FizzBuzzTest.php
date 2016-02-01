<?php

include 'src/FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase {

    private $fizzBuzz;

    public function __construct()
    {
        $this->fizzBuzz = new FizzBuzz();;
    }

    public function testOneReturnsOne()
    {
        $this->assertEquals(1, $this->fizzBuzz->fizz_buzz(1));
    }

    public function testTwoReturnsTwo()
    {
        $this->assertEquals(2, $this->fizzBuzz->fizz_buzz(2));
    }

    public function testThreeReturnsFizz()
    {
        $this->assertEquals("Fizz", $this->fizzBuzz->fizz_buzz(3));
    }

    public function testFourReturnsFour()
    {
        $this->assertEquals(4, $this->fizzBuzz->fizz_buzz(4));
    }

    public function testFiveReturnsBuzz()
    {
        $this->assertEquals("Buzz", $this->fizzBuzz->fizz_buzz(5));
    }

    public function testSixReturnsFizz()
    {
        $this->assertEquals("Fizz", $this->fizzBuzz->fizz_buzz(6));
    }

    public function testFifteenReturnsFizzBuzz()
    {
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->fizz_buzz(15));
    }


    /* combine similar examples */
    public function testValuesDivisibleByThreeReturnFizz()
    {
        $this->assertEquals("Fizz", $this->fizzBuzz->fizz_buzz(3 * 1));
        $this->assertEquals("Fizz", $this->fizzBuzz->fizz_buzz(3 * 2));
        $this->assertEquals("Fizz", $this->fizzBuzz->fizz_buzz(3 * 3));
        $this->assertEquals("Fizz", $this->fizzBuzz->fizz_buzz(3 * 4));
        $this->assertEquals("Fizz", $this->fizzBuzz->fizz_buzz(3 * 6));
        $this->assertEquals("Fizz", $this->fizzBuzz->fizz_buzz(3 * 101)); // 303
    }

    public function testValuesDivisibleByFiveReturnBuzz()
    {
        $this->assertEquals("Buzz", $this->fizzBuzz->fizz_buzz(5 * 1));
        $this->assertEquals("Buzz", $this->fizzBuzz->fizz_buzz(5 * 2));
        $this->assertEquals("Buzz", $this->fizzBuzz->fizz_buzz(5 * 4));
        $this->assertEquals("Buzz", $this->fizzBuzz->fizz_buzz(5 * 5));
        $this->assertEquals("Buzz", $this->fizzBuzz->fizz_buzz(5 * 101)); // 505
    }

    public function testValuesDivisibleByThreeAndFiveReturnFizzBuzz()
    {
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->fizz_buzz(3 * 5 * 1));
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->fizz_buzz(3 * 5 * 2));
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->fizz_buzz(3 * 5 * 4));
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->fizz_buzz(3 * 5 * 5));
        $this->assertEquals("FizzBuzz", $this->fizzBuzz->fizz_buzz(3 * 5 * 101)); // 555
    }

    public function testOtherValuesReturnTheInput()
    {
        $this->assertEquals(1, $this->fizzBuzz->fizz_buzz(1));
        $this->assertEquals(2, $this->fizzBuzz->fizz_buzz(2));
        $this->assertEquals(4, $this->fizzBuzz->fizz_buzz(4));
        $this->assertEquals(7, $this->fizzBuzz->fizz_buzz(7));
        $this->assertEquals(8, $this->fizzBuzz->fizz_buzz(8));
    }

    public function testSomePrimeValuesReturnTheInput()
    {
        $this->assertEquals(23, $this->fizzBuzz->fizz_buzz(23), "Prime number 23 returns 23");
        $this->assertEquals(101, $this->fizzBuzz->fizz_buzz(101), "Prime number 101 returns 101");
        $this->assertEquals(113, $this->fizzBuzz->fizz_buzz(113), "Prime number 113 returns 113");

    }


}
