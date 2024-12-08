<?php
function arithmetics($firstArgument, $secondArgument, $operation): float|int|null
{
    switch ($operation) {
        case "+":
            return $firstArgument + $secondArgument;
        case "-":
            return $firstArgument - $secondArgument;
        case "*":
            return $firstArgument * $secondArgument;
        case "/":
            return $firstArgument / $secondArgument;
        default:
            return null;
    }
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
