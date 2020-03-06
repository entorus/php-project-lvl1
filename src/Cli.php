<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".' . "\n");
    $name = prompt('May I have your name?');
    line("Hello, %s! \n", $name);

    for ($i=0; $i < 3; $i++) { 
        $number = random_int( 0, 100 );
        $answer = prompt('Question: ' . $number);
        line("Your answer: %s! \n", $answer);
    }
}
