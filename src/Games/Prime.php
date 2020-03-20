<?php

namespace BrainGames\Games;

class Prime
{
    private $description;
    private $question;
    private $answer;
    private $correctAnswer;

    public function __construct()
    {
        $this->description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
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
        $this->question = $number1;
        $this->correctAnswer = $this->isPrime($number1);
        return $this->question;
    }

    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    public function play()
    {
        $is_true = $this->isTrue($this->answer);
        if ($is_true !== -1 && $this->correctAnswer == $is_true) {
            return true;
        } else {
            $this->correctAnswer = !$is_true ? 'yes' : 'no';
            return false;
        }
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
