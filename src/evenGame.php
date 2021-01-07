<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;
use function Utils;

function isEven($num)
{
    return $num % 2 === 0;
}

function evenGame()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $mission = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    line($mission);
    $step = 3;

    for ($i = 0; $i < $step; $i++) {
        $randNum = \Utils\random();
        $question = "Question: {$randNum}";
        $rightAnswer = isEven($randNum) ? 'yes' : 'no';
        line($question);
        $answer = prompt('Your answer: ');
        if ($answer !== $rightAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line('Correct!');
    }
    line("Congratulations, {$name}!");
}
