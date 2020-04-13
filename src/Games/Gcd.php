<?php

namespace BrainGames\Games\Gcd;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function run()
{
    $playGame = function () {
        $number1 = random_int(1, 100);
        $number2 = random_int(1, 100);
        $gameData = [];
        $gameData['question'] = "$number1 $number2";
        $result = gcd($number1, $number2);
        $gameData['result'] = $result;
        return $gameData;
    };
    \BrainGames\run($playGame, DESCRIPTION);
}

function gcd($num1, $num2)
{
    $minimum = minimum($num1, $num2);
    for ($i = $minimum; $i >= 1; $i--) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            return $i;
        }
    }
}

function minimum($num1, $num2)
{
    return $num1 < $num2 ? $num1 : $num2;
}
