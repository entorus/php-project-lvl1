<?php

namespace BrainGames\Games;

class Even
{
    private $description;
    private $question;
    private $answer;
    private $correctAnswer;

    public function __construct()
    {
        $this->description = 'Answer "yes" if the number is even, otherwise answer "no".';
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
        $number = random_int(0, 100);
        $this->question = $number;
        return $this->question;
    }

    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    public function play()
    {
        $even = $this->isEven((int)$this->question);
        $is_true = $this->isTrue($this->answer);
        if ($is_true !== -1 && $even == $is_true) {
            return true;
        } else {
            $this->correctAnswer = !$is_true ? 'yes' : 'no';
            return false;
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
