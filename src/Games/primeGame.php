<?php

namespace Brain\Games\Prime;

use function Utils\random;
use function Brain\Engine\run;

function isPrime(int $num): boolval
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function primeGame()
{
    $mission = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";
    $step = 3;
    $data = [];
    for ($i = 0; $i < $step; $i++) {
        $randNum = random();
        $rightAnswer = isPrime($randNum) ? 'yes' : 'no';
        $question = "Question: {$randNum}";
        $data[] = [$question, $rightAnswer];
    }
    run($mission, $data);
}
