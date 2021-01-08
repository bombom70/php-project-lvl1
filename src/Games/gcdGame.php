<?php

namespace Brain\Games\Gcd;

use function Utils;
use function Brain\Engine;

function gcd($num1, $num2)
{
    $val = 1;

    for ($i = 2; $i <= $num1; $i++) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            $val = $i;
        }
    }
    return $val;
}

function gcdGame()
{
    $mission = "Find the greatest common divisor of given numbers.";
    $step = 3;
    $data = [];
    for ($i = 0; $i < $step; $i++) {
        $randNum1 = \Utils\random();
        $randNum2 = \Utils\random();
        $question = "Question: {$randNum1} {$randNum2}";
        $rightAnswer = strval(gcd($randNum1, $randNum2));
        $data[] = [$question, $rightAnswer];
    }
    \Brain\Engine\run($mission, $data);
}
