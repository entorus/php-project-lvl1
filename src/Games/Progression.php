<?php

namespace BrainGames\Games\Progression;

const DESCRIPTION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function run()
{
    $generateGameData = function () {
        $firstElementOfProgression = random_int(1, 100);
        $diff = random_int(1, 100);
        $lastElementOfProgressionIndex = PROGRESSION_LENGTH - 1;
        $correctAnswerPosition = random_int(0, $lastElementOfProgressionIndex);

        $gameData = [];
        $progression = generateProgression(
            $firstElementOfProgression,
            $diff,
            $correctAnswerPosition
        );
        $gameData['question'] = getQuestion($progression, $correctAnswerPosition);
        $gameData['result'] = getCorrectAnswer($progression, $correctAnswerPosition);
        return $gameData;
    };
    \BrainGames\run($generateGameData, DESCRIPTION);
}

function generateProgression($firstElement, $diff, $position)
{
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $progression[$i] = $firstElement + $diff * $i;
    }
    return $progression;
}

function getQuestion($progression, $position)
{
    $progression[$position] = '...';
    $question = implode(' ', $progression);
    return $question;
}

function getCorrectAnswer($progression, $position)
{
    return $progression[$position];
}
