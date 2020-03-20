<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

function run($game)
{
    line('Welcome to the Brain Games!');
    $description = $game->getDescription();
    line("%s \n", $description);
    $name = prompt('May I have your name?');
    line("Hello, %s! \n", $name);
    for ($i = 0; $i < 3; $i++) {
        $question = $game->getQuestion();
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        $game->setAnswer($answer);
        $result = $game->play();
        if (!$result) {
            $correctAnswer = $game->getCorrectAnswer();
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            return;
        }
    }
    line("Correct!");
    line("Congratulations, $name!");
}
