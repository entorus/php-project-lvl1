<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

function run($gameResult, $description)
{
    line('Welcome to the Brain Games!');
    line("%s \n", $description);
    $name = prompt('May I have your name?');
    line("Hello, %s! \n", $name);
    for ($i = 0; $i < 3; $i++) {
        ['question' => $question, 'result' => $result] = $gameResult();
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
