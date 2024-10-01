<?php

if (! function_exists('getGender')) {
    function getGender($gender)
    {
        return $gender == 'F' ? 'Perempuan' : 'Laki-laki';
    }
}


if (!function_exists('formatMoney')) {
    function formatMoney($value, $prefix = false)
    {
        if ($prefix == true) {
            return 'Rp. ' . number_format($value, 0, ",", ".");
        } else {
            return number_format($value, 0, ",", ".");
        }
    }
}
