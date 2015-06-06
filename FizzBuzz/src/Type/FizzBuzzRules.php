<?php
namespace Dojos\FizzBuzz\Type;
use Dojos\FizzBuzz\InterfaceFizzBuzzRules;

/**
 * Class which will handle all the rules under a Fizz Buzz game.
 *
 * Class FizzBuzzRules
 * @package Dojos\FizzBuzz\Type
 */
class FizzBuzzRules implements InterfaceFizzBuzzRules
{
    /**
     * The start range of the generator of the game.
     *
     * @var $startRange int
     */
    protected $startRange = 1;

    /**
     * The start range of the generator of the game.
     *
     * @var $endRange int
     */
    protected $endRange = 100;

    /**
     * The array containing all the rules of the game.
     *
     * @var array
     */
    protected $rules = [];

    public function __construct(FizzBuzzMultiplesRule $multiples)
    {
        $this->rules = [
            $multiples
        ];
    }

    /**
     * Get the first number which will be started the generation of the words.
     *
     * @return mixed
     */
    public function getStartRange()
    {
        return $this->startRange;
    }

    /**
     * Get the last number which will be started the generation of the words.
     *
     * @return mixed
     */
    public function getEndRange()
    {
        return $this->endRange;
    }

    /**
     * Get the rules of the game.
     *
     * @return array
     */
    public function getRules()
    {
        return $this->rules;
    }
}