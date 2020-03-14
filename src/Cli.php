<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run()
{
    $correct_answers_count = 0;
    line('Welcome to the Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".' . "\n");
    $name = prompt('May I have your name?');
    line("Hello, %s! \n", $name);

    for ($i = 0; $i < 3; $i++) {
        $number = random_int(0, 100);
        $answer = prompt('Question: ' . $number);
        line("Your answer: %s \n", $answer);
        $even = isEven($number);
        $is_true = isTrue($answer);
        if ($is_true !== -1 && $even == $is_true) {
            line("Correct!");
            $correct_answers_count++;
        } else {
            $correct_answer = !$is_true ? 'yes' : 'no';
            line("'$answer' is wrong answer ;(. Correct answer was '$correct_answer'.");
            line("Let's try again, $name!");
        }
    }
    if ($correct_answers_count == 3) {
        line("Congratulations, $name!");
    } else {
        line("Sorry, $name, but you lose!");
    }
}

function isEven($num): bool
{
    return (int)$num % 2 == 0;
}

function isTrue($input)
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
