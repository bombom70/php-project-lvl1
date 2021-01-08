<?php

namespace Utils;

function random(int $min = 1, int $max = 20): int
{
    return rand($min, $max);
}
