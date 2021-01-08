<?php

namespace Brain\Games\Even;

use function Utils;
use function Brain\Engine;

function isEven($num)
{
    return $num % 2 === 0;
}

function evenGame()
{
    $mission = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    $step = 3;
    $data = [];
    for ($i = 0; $i < $step; $i++) {
        $randNum = \Utils\random();
        $question = "Question: {$randNum}";
        $rightAnswer = isEven($randNum) ? 'yes' : 'no';
        $data[] = [$question, $rightAnswer];
    }
    \Brain\Engine\run($mission, $data);
}
