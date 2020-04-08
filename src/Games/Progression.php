<?php

namespace BrainGames\Games\Progression;

const DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function run()
{
    $gameplay = function () {
        $firstElementOfProgression = random_int(1, 100);
        $diff = random_int(1, 100);
        $lastElementOfProgression = PROGRESSION_LENGTH - 1;
        $correctAnswerPosition = random_int(0, $lastElementOfProgression);

        $gameData = [];
        $gameResult = generateGameData($firstElementOfProgression, $diff, $correctAnswerPosition);
        $gameData['question'] = $gameResult['progressionText'];
        $result = $gameResult['correctAnswer'];
        $gameData['result'] = $result;
        return $gameData;
    };
    \BrainGames\run($gameplay, DESCRIPTION);
}

function generateGameData($num, $diff, $position)
{
    for (
        $elementPosition = 0, $element = $num;
        $elementPosition < PROGRESSION_LENGTH;
        $elementPosition++, $element += $diff
    ) {
        $progression[$elementPosition] = $element;
    }
    $correctAnswer = $progression[$position];
    $progression[$position] = '...';
    $question = implode(' ', $progression);
    $result['progressionText'] = $question;
    $result['correctAnswer'] = $correctAnswer;
    return $result;
}
