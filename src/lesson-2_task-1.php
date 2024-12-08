<?php
function arithmetics($firstArgument, $secondArgument, $operation): float|int|null
{
    return match ($operation) {
        "+" => $firstArgument + $secondArgument,
        "-" => $firstArgument - $secondArgument,
        "*" => $firstArgument * $secondArgument,
        "/" => $firstArgument / $secondArgument,
        default => null,
    };
}

$firstInt = 1;
$secondInt = 2;

$addition = "+";
$subtraction = "-";
$multiplication = "*";
$division = "/";

var_dump(arithmetics($firstInt, $secondInt, $addition));
var_dump(arithmetics($firstInt, $secondInt, $subtraction));
var_dump(arithmetics($firstInt, $secondInt, $multiplication));
var_dump(arithmetics($firstInt, $secondInt, $division));
var_dump(arithmetics($firstInt, $secondInt, "OK"));
