<?php

use Dojos\FizzBuzz\FizzBuzz;
use Dojos\FizzBuzz\Type\FizzBuzzMultiples;
use Dojos\FizzBuzz\Type\FizzBuzzRules;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testASuccessfulFizzBuzzGame()
    {
        $multiple = new FizzBuzzMultiples();

        $fizzBuzzRules = new FizzBuzzRules($multiple);

        $fizzBuzz = new FizzBuzz($fizzBuzzRules);

        $fizzBuzz->generate();

        var_dump($fizzBuzz->showOutput());
    }
}