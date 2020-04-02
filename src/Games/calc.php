<?php

namespace BrainGames\Games\Calc;

const DESCRIPTION = "What is the result of the expression?";

function run()
{
    $gameplay = function () {
        $number1 = random_int(0, 100);
        $number2 = random_int(0, 100);
        $operation = random_int(0, 2);
        $gameData = [];
        $gameData['question'] = getQuestionText($number1, $number2, $operation);
        $result = getResult($number1, $number2, $operation);
        $gameData['result'] = $result;
        return $gameData;
    };
    \BrainGames\run($gameplay, DESCRIPTION);
}

function getQuestionText($number1, $number2, $operation)
{
    $operations = ['-', '+', '*'];
    return $number1 . ' ' . $operations[$operation] . ' ' . $number2;
}

function getResult($number1, $number2, $operation)
{
    switch ($operation) {
        case '0':
            return $number1 - $number2;
        case '1':
            return $number1 + $number2;
        case '2':
            return $number1 * $number2;
    }
}
