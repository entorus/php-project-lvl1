<?php

namespace BrainGames\Games;

class Gcd
{
    private $description;
    private $question;
    private $answer;
    private $correctAnswer;

    public function __construct()
    {
        $this->description = 'Find the greatest common divisor of given numbers.';
        \BrainGames\run($this);
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    public function getQuestion()
    {
        $number1 = random_int(1, 100);
        $number2 = random_int(1, 100);
        $this->correctAnswer = $this->gcd($number1, $number2);
        return $this->question;
    }

    public function play()
    {
        if (!$this->isCorrect($this->correctAnswer, (int)$this->answer)) {
            return false;
        }
        return true;
    }

    private function gcd($num1, $num2)
    {
        $minimum = $this->minimum($num1, $num2);
        $this->question = $num1 . ' ' . $num2;
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
