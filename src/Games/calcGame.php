<?php

namespace Brain\Games\Calc;

use function Utils;
use function Brain\Engine;

function calcGame()
{
    $mission = "What is the result of the expression?";
    $step = 3;
    $data = [];
    for ($i = 0; $i < $step; $i++) {
        $randNum1 = \Utils\random();
        $randNum2 = \Utils\random();
        $signs = ['+', '-', '*'];
        $sign = $signs[rand(0, 2)];
        $rightAnswer;
        $question = "Question: {$randNum1} {$sign} {$randNum2}";
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
    \Brain\Engine\run($mission, $data);
}
