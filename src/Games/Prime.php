<?php

namespace BrainGames\Games\Prime;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $playGame = function () {
        $question = random_int(0, 100);

        $gameData = [];
        $gameData['question'] = $question;
        $result = getCorrectAnswer($question);
        $gameData['result'] = $result;
        return $gameData;
    };
    \BrainGames\run($playGame, DESCRIPTION);
}

function getCorrectAnswer($num)
{
    return isPrime($num) ? 'yes' : 'no';
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}
