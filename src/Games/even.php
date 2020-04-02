<?php

namespace BrainGames\Games\Even;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function run()
{
    $gameplay = function () {
        $number = random_int(0, 100);
        $gameData = [];
        $gameData['question'] = $number;
        $result = getCorrectAnswer($number);
        $gameData['result'] = $result;
        return $gameData;
    };
    \BrainGames\run($gameplay, DESCRIPTION);
}

function isEven($number): bool
{
    return (int)$number % 2 == 0;
}

function getCorrectAnswer($number)
{
    return isEven($number) ? 'yes' : 'no';
}
