<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;
use function Utils\random;

function run(string $mission, array $data)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($mission);
    $step = 3;

    foreach ($data as [$question, $rightAnswer]) {
        $randNum = random();
        line($question);
        $answer = prompt('Your answer: ');
        if ($answer !== $rightAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            break;
        }
        line('Correct!');
    }
    line("Congratulations, {$name}!");
}
