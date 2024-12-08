<?php

function getCurrentTimeWithWords(): string
{
    $hours = (int)date('H');
    $minutes = (int)date('i');

    $hoursWord = getWordForNumber($hours, ['час', 'часа', 'часов']);
    $minutesWord = getWordForNumber($minutes, ['минута', 'минуты', 'минут']);

    return "$hours $hoursWord $minutes $minutesWord";
}

function getWordForNumber(int $number, array $forms): string
{
    $mod10 = $number % 10;
    $mod100 = $number % 100;

    if ($mod100 >= 11 && $mod100 <= 19) {
        return $forms[2];
    }
    if ($mod10 === 1) {
        return $forms[0];
    }
    if ($mod10 >= 2 && $mod10 <= 4) {
        return $forms[1];
    }
    return $forms[2];
}

var_dump(getCurrentTimeWithWords());
