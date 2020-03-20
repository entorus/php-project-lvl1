<?php

namespace BrainGames\Games;

class Calc
{
    private $description;
    private $question;
    private $answer;
    private $correctAnswer;

    public function __construct()
    {
        $this->description = "What is the result of the expression?";
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

    public function getQuestion()
    {
        $number1 = random_int(0, 100);
        $number2 = random_int(0, 100);
        $this->correctAnswer = $this->mathOperation($number1, $number2);
        return $this->question;
    }

    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    public function play()
    {
        if (!$this->isCorrect($this->correctAnswer, (int)$this->answer)) {
            return false;
        }
        return true;
    }

    

    private function mathOperation($num1, $num2)
    {
        $operations = ['-', '+', '*'];
        $operation = random_int(0, 2);
        $this->question = $num1 . ' ' . $operations[$operation] . ' ' . $num2;
        switch ($operation) {
            case '0':
                return $num1 - $num2;
            case '1':
                return $num1 + $num2;
            case '2':
                return $num1 * $num2;
        }
    }

    private function isCorrect($num1, $num2)
    {
        return $num1 === $num2;
    }
}
