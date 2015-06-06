<?php

use Dojos\FizzBuzz\FizzBuzzGame;
use Dojos\FizzBuzz\Type\FizzBuzzMultiplesRule as MultiplesRule;
use Dojos\FizzBuzz\Type\FizzBuzzRules as Rules;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected $fizzBuzzGameOutput;
    
    public function setUp()
    {
        $multiplesRules = new MultiplesRule();

        $fizzBuzzRules = new Rules($multiplesRules);

        $fizzBuzzGame = new FizzBuzzGame($fizzBuzzRules);

        $this->fizzBuzzGameOutput = $fizzBuzzGame->showGameOutput();
    }
    
    public function testASuccessfulFizzBuzzGame()
    {
        $multiples = [
            3 => 'Fizz',
            5 => 'Buzz'
        ];
        
        $this->assertEquals($this->fizzBuzzGameOutput, $this->generateFizzBuzz($multiples));        
    }
    
    public function testAFailedFizzBuzzGameBecauseOfWrongMultipleNumbers()
    {
        $multiples = [
            4 => 'Fizz',
            5 => 'Buzz'
        ];
        
        $this->assertNotEquals($this->fizzBuzzGameOutput, $this->generateFizzBuzz($multiples));        
    }
    
    public function testAFailedFizzBuzzGameBecauseOfWrongNames()
    {
        $multiples = [
            3 => 'Fizz',
            5 => 'Buzzlightyear'
        ];
        
        $this->assertNotEquals($this->fizzBuzzGameOutput, $this->generateFizzBuzz($multiples));        
    }
    
    private function generateFizzBuzz($multiples)
    {
        $minRange = 1;
        $maxRange = 100;
        $gameOutput = [];
        
        for (
            $number =  $minRange;
            $number <= $maxRange;
            $number++
        ) {
            $resultWord = '';
            
            foreach ($multiples as $multiple => $word){
                $resultWord = $number % $multiple == 0 ?
                    $resultWord . $word :
                    $resultWord
                ;
            }
            
            $gameOutput[] = $resultWord != '' ? $resultWord : $number;
        }
        
        return $gameOutput;
    }
}