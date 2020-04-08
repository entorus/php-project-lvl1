<?php

namespace BrainGames\Games\Calc;

const DESCRIPTION = "What is the result of the expression?";

function run()
{
    $gameplay = function () {
        $operations = [
            '*' => function ($a, $b) {
                return $a * $b;
            },
            '+' => function ($a, $b) {
                return $a + $b;
            },
            '-' => function ($a, $b) {
                return $a - $b;
            }
        ];
        $number1 = random_int(0, 100);
        $number2 = random_int(0, 100);
        $operationKey = array_rand($operations);
        $gameData = [];
        $gameData['question'] = "{$number1} {$operationKey} {$number2}";
        $result = $operations[$operationKey]($number1, $number2);
        $gameData['result'] = $result;
        return $gameData;
    };
    \BrainGames\run($gameplay, DESCRIPTION);
}
