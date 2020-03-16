<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

class Gcd
{
        private $name;

    public function __construct()
    {
        line('Welcome to the Brain Games!');
        line("Find the greatest common divisor of given numbers. \n");
        $name = prompt('May I have your name?');
        line("Hello, %s! \n", $name);
        $this->name = $name;
    }

    public function play()
    {
        for ($i = 0; $i < 3; $i++) {
            $number1 = random_int(1, 100);
            $number2 = random_int(1, 100);
            $question = $this->gcd($number1, $number2);
            $answer = (int)prompt('Your answer');
            if (!$this->isCorrect($question, $answer)) {
                line("'$answer' is wrong answer ;(. Correct answer was '$question'.");
                line("Let's try again, $this->name!");
                return;
            }
            line("Correct!");
        }
        line("Congratulations, $this->name!");
    }

    private function gcd($num1, $num2)
    {
        $minimum = $this->minimum($num1, $num2);
        line('Question: ' . $num1 . ' ' . $num2);
        for ($i = $minimum; $i >= 1; $i--) {
            if ($num1 % $i == 0 && $num2 % $i == 0) {
                return $i;
            }
        }
    }

    private function minimum($num1, $num2)
    {
        return $num1 < $num2 ? $num1 : $num2;
    }

    private function isCorrect($num1, $num2)
    {
        return $num1 === $num2;
    }
}
