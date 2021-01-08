<?php

namespace Brain\Games\Even;

use function Utils\random;
use function Brain\Engine\run;

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
        $randNum = random();
        $question = "Question: {$randNum}";
        $rightAnswer = isEven($randNum) ? 'yes' : 'no';
        $data[] = [$question, $rightAnswer];
    }
    run($mission, $data);
}
