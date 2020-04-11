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
        $progression = generateProgression(
            $firstElementOfProgression,
            $diff,
            $correctAnswerPosition
        );
        $gameData['question'] = getQuestion($progression, $correctAnswerPosition);
        $gameData['result'] = getCorrectAnswer($progression, $correctAnswerPosition);
        return $gameData;
    };
    \BrainGames\run($gameplay, DESCRIPTION);
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
