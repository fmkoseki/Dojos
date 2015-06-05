<?php
namespace Dojos\FizzBuzz\Type;

class FizzBuzzMultiplesRule implements InterfaceFizzBuzzRule
{
    protected $multiples = [
        3 => 'Fizz',
        5 => 'Buzz'
    ];

    public function applyRule($number)
    {
        $resultWord = '';

        foreach ($this->multiples as $multiple => $word) {
            $resultWord = $number % $multiple == 0 ? $resultWord . $word : $resultWord;
        }

        return $resultWord;
    }

    public function getMultiples()
    {
        return $this->multiples;
    }
}