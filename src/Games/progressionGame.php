<?php

namespace Brain\Games\Progression;

use function Utils\random;
use function Brain\Engine\run;

function generateProgression()
{
    $step = rand(1, 5);
    $progressionLength = 6;
    $progression = [];
    $randNum = random();

    for ($i = 0; $i < $progressionLength; $i++) {
        $progression[] = $randNum + $step * $i;
    }
    return $progression;
}

function progressionGame()
{
    $mission = "What number is missing in the progression?";
    $step = 3;
    $data = [];
    for ($i = 0; $i < $step; $i++) {
        $randNum1 = random();
        $randNum2 = random();
        $progression = generateProgression();
        $hiddenVal = random(0, count($progression) - 1);
        $rightAnswer = strval($progression[$hiddenVal]);
        $progression[$hiddenVal] = '..';
        $questionColl = implode(' ', $progression);
        $question = "Question: {$questionColl}";
        $data[] = [$question, $rightAnswer];
    }
    run($mission, $data);
}
