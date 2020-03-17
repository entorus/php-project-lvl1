<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

class Prime
{
        private $name;

    public function __construct()
    {
        line('Welcome to the Brain Games!');
        line('Answer "yes" if given number is prime. Otherwise answer "no".');
        line('');
        $name = prompt('May I have your name?');
        line("Hello, %s! \n", $name);
        $this->name = $name;
    }

    public function play()
    {
        for ($i = 0; $i < 3; $i++) {
            $number1 = random_int(0, 100);
            $question = $this->isPrime($number1);
            line("Question %s", $number1);
            $answer = prompt('Your answer');
            $is_true = $this->isTrue($answer);
            if ($is_true !== -1 && $question == $is_true) {
                line("Correct!");
            } else {
                $correct_answer = !$is_true ? 'yes' : 'no';
                line("'$answer' is wrong answer ;(. Correct answer was '$correct_answer'.");
                line("Let's try again, $this->name!");
                return;
            }
        }
        line("Congratulations, $this->name!");
    }

    private function isPrime($num)
    {
        if ($num < 2) {
            return false;
        }

        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }

        return true;
    }

    private function isTrue($input)
    {
        switch ($input) {
            case 'yes':
                return true;
            case 'no':
                return false;
            default:
                return -1;
        }
    }
}
