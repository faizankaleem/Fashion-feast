<?php

function generateOtp($table, $field)
{
    $number = mt_rand(1000, 9999);
    $opt_exist = DB::table($table)->where($field, '=', $number)->exists();
    if ($opt_exist) {
        generateOtp($table, $field);
    }
    return $number;
}
