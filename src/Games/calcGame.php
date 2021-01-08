<?php

namespace Brain\Games\Calc;

use function Utils\random;
use function Brain\Engine\run;

function calcGame(): mixed
{
    $mission = "What is the result of the expression?";
    $step = 3;
    $data = [];
    for ($i = 0; $i < $step; $i++) {
        $randNum1 = random();
        $randNum2 = random();
        $signs = ['+', '-', '*'];
        $sign = $signs[random(0, 2)];
        $question = "Question: {$randNum1} {$sign} {$randNum2}";
        $rightAnswer = 0;
        switch ($sign) {
            case "+":
                $rightAnswer = $randNum1 + $randNum2;
                break;
            case "-":
                $rightAnswer = $randNum1 - $randNum2;
                break;
            case "*":
                $rightAnswer = $randNum1 * $randNum2;
                break;
        }
        $data[] = [$question, strval($rightAnswer)];
    }
    run($mission, $data);
}
