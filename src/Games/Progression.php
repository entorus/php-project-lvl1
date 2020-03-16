<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

class Progression
{
        private $name;

    public function __construct()
    {
        line('Welcome to the Brain Games!');
        line("What number is missing in the progression? \n");
        $name = prompt('May I have your name?');
        line("Hello, %s! \n", $name);
        $this->name = $name;
    }

    public function play()
    {
        for ($i = 0; $i < 3; $i++) {
            $number = random_int(1, 100);
            $diff = random_int(1, 100);
            $question = $this->generateProgression($number, $diff);
            $answer = prompt('Your answer');
            if (!$this->isCorrect($question, (int)$answer)) {
                line("'$answer' is wrong answer ;(. Correct answer was '$question'.");
                line("Let's try again, $this->name!");
                return;
            }
            line("Correct!");
        }
        line("Congratulations, $this->name!");
    }

    private function generateProgression($num, $diff)
    {
        $progression = [$num];
        $correctAnswerPosition = random_int(0, 9);
        for ($i = 1; $i < 10; $i++) {
            $progression[] = $progression[$i - 1] + $diff;
        }
        $correctAnswer = $progression[$correctAnswerPosition];
        $progression[$correctAnswerPosition] = '...';
        $question = implode(' ', $progression);
        line('Question: ' . $question);
        return $correctAnswer;
    }

    private function isCorrect($num1, $num2)
    {
        return $num1 === $num2;
    }
}
