<?php

if (! function_exists('getGender')) {
    function getGender($gender)
    {
        return $gender == 'F' ? 'Perempuan' : 'Laki-laki';
    }
}
