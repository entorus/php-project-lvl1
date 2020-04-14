<?php

namespace BrainGames\Games\Even;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function run()
{
    $generateGameData = function () {
        $question = random_int(0, 100);
        $gameData = [];
        $gameData['question'] = $question;
        $result = getCorrectAnswer($question);
        $gameData['result'] = $result;
        return $gameData;
    };
    \BrainGames\run($generateGameData, DESCRIPTION);
}

function isEven($number): bool
{
    return (int)$number % 2 == 0;
}

function getCorrectAnswer($number)
{
    return isEven($number) ? 'yes' : 'no';
}
