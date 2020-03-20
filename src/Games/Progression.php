<?php

namespace BrainGames\Games;

class Progression
{
    private $description;
    private $question;
    private $answer;
    private $correctAnswer;

    public function __construct()
    {
        $this->description = 'What number is missing in the progression?';
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
        $number = random_int(1, 100);
        $diff = random_int(1, 100);
        $this->correctAnswer = $this->generateProgression($number, $diff);
        return $this->question;
    }

    public function play()
    {
        if (!$this->isCorrect($this->correctAnswer, (int)$this->answer)) {
                return false;
        }
        return true;
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
        $this->question = $question;
        return $correctAnswer;
    }

    private function isCorrect($num1, $num2)
    {
        return $num1 === $num2;
    }
}
