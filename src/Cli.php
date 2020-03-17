<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

function run($game)
{
    $gameplay = null;
    switch ($game) {
        case 'calc':
            $gameplay = new \BrainGames\Games\Calc();
            break;
        case 'even':
            $gameplay = new \BrainGames\Games\Even();
            break;
        case 'gcd':
            $gameplay = new \BrainGames\Games\Gcd();
            break;
        case 'progression':
            $gameplay = new \BrainGames\Games\Progression();
            break;
        case 'prime':
            $gameplay = new \BrainGames\Games\Prime();
            break;
        default:
            line('error');
            break;
    }
    $gameplay->play();
}
