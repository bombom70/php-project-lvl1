<?php

namespace Brain\Games\Gcd;

use function Utils\random;
use function Brain\Engine\run;

function gcd(int $num1, int $num2): int
{
    $val = 1;

    for ($i = 2; $i <= $num1; $i++) {
        if ($num1 % $i === 0 && $num2 % $i === 0) {
            $val = $i;
        }
    }
    return $val;
}

function gcdGame(): none
{
    $mission = "Find the greatest common divisor of given numbers.";
    $step = 3;
    $data = [];
    for ($i = 0; $i < $step; $i++) {
        $randNum1 = random();
        $randNum2 = random();
        $question = "Question: {$randNum1} {$randNum2}";
        $rightAnswer = strval(gcd($randNum1, $randNum2));
        $data[] = [$question, $rightAnswer];
    }
    run($mission, $data);
}
