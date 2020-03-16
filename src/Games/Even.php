<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

class Even
{
    private $name;

    public function __construct()
    {
        line('Welcome to Brain Games!');
        line('Answer "yes" if the number is even, otherwise answer "no".' . "\n");
        $name = prompt('May I have your name?');
        line("Hello, %s! \n", $name);
        $this->name = $name;
        line('');
    }

    public function play()
    {
        $correct_answers_count = 0;
        for ($i = 0; $i < 3; $i++) {
            $number = random_int(0, 100);
            $answer = prompt('Question: ' . $number);
            line("Your answer: %s \n", $answer);
            $even = $this->isEven($number);
            $is_true = $this->isTrue($answer);
            if ($is_true !== -1 && $even == $is_true) {
                line("Correct!");
                $correct_answers_count++;
            } else {
                $correct_answer = !$is_true ? 'yes' : 'no';
                line("'$answer' is wrong answer ;(. Correct answer was '$correct_answer'.");
                line("Let's try again, $this->name!");
                break;
            }
        }
        if ($correct_answers_count == 3) {
            line("Congratulations, $this->name!");
        }
    }

    private function mathOperation($num1, $num2)
    {
        $operations = ['-', '+', '*'];
        $operation = random_int(0, 2);
        line('Question: ' . $num1 . ' ' . $operations[$operation] . ' ' . $num2);
        switch ($operation) {
            case '0':
                return $num1 - $num2;
            case '1':
                return $num1 + $num2;
            case '2':
                return $num1 * $num2;
        }
    }

    private function isEven($num): bool
    {
        return (int)$num % 2 == 0;
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
