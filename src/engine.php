<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

const QUESTIONS_COUNT = 3;

function run($generateGameData, $description)
{
    line('Welcome to the Brain Games!');
    line("%s \n", $description);
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    for ($i = 0; $i < QUESTIONS_COUNT; $i++) {
        ['question' => $question, 'result' => $result] = $generateGameData();
        line("Question: %s", $question);
        $answer = prompt('Your answer');
        if ($result != $answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$result'.");
            line("Let's try again, $name!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, $name!");
}
