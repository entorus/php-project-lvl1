<?php

namespace BrainGames\Games\Progression;

const DESCRIPTION = 'What number is missing in the progression?';

function run()
{
    $gameplay = function () {
        $number = random_int(1, 100);
        $diff = random_int(1, 100);
        $correctAnswerPosition = random_int(0, 9);

        $gameData = [];
        $gameResult = generateProgression($number, $diff, $correctAnswerPosition);
        $gameData['question'] = $gameResult['progressionText'];
        $result = $gameResult['correctAnswer'];
        $gameData['result'] = $result;
        return $gameData;
    };
    \BrainGames\run($gameplay, DESCRIPTION);
}

function generateProgression($num, $diff, $position)
{
    $progression = [$num];
    
    for ($i = 1; $i < 10; $i++) {
        $progression[] = $progression[$i - 1] + $diff;
    }
    $correctAnswer = $progression[$position];
    $progression[$position] = '...';
    $question = implode(' ', $progression);
    $result['progressionText'] = $question;
    $result['correctAnswer'] = $correctAnswer;
    return $result;
}
