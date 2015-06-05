<?php
namespace Dojos\FizzBuzz;

use Dojos\FizzBuzz\Type\FizzBuzzRules;

abstract class AbstractFizzBuzzGame
{
    /**
     * @var $fizzBuzzRules \Dojos\FizzBuzz\Type\FizzBuzzRules
     */
    protected $fizzBuzzRules;

    protected $gameOutput = [];

    public function __construct(FizzBuzzRules $fizzBuzzRules)
    {
        $this->fizzBuzzRules = $fizzBuzzRules;
    }

    /**
     * Generates the output
     */
    protected function generate()
    {
        for (
            $number =  $this->fizzBuzzRules->getStartRange();
            $number <= $this->fizzBuzzRules->getEndRange();
            $number++
        ) {
            $resultWord = $this->applyRules($number);

            $this->gameOutput[] = $resultWord == '' ? $number : $resultWord;
        }
    }

    /**
     * Apply the rules
     *
     * @param $number
     * @return string
     */
    protected function applyRules($number)
    {
        $resultWord = '';
        /* @var $fizzBuzzRule \Dojos\FizzBuzz\Type\InterfaceFizzBuzzRule */
        foreach ($this->fizzBuzzRules->getRules() as $fizzBuzzRule) {
            $resultWord = $fizzBuzzRule->applyRule($number);
        }

        return $resultWord;
    }

    public function showGameOutput()
    {
        $this->generate();
        
        return $this->gameOutput;
    }
}
