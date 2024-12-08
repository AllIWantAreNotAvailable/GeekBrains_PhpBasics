<?php

function power($val, $pow): float|int
{
    if ($pow == 0) {
        return 1;
    }

    if ($pow < 0) {
        return 1 / power($val, -$pow);
    }

    return $val * power($val, $pow - 1);
}

var_dump(power(2, 3));
var_dump(power(5, 0));
var_dump(power(2, -2));
