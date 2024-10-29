<?php

use Carbon\Carbon;

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

if (!function_exists('strReplace')) {
    function strReplace($value)
    {
        // Ganti koma menjadi titik (untuk desimal), lalu hapus titik (pemecah ribuan)
        $value = str_replace(",", ".", str_replace(".", "", $value));
        return (float) $value;  // Konversi ke float agar bisa dipakai dalam operasi matematika
    }
}

if (!function_exists('formatDate')) {
    function formatDate($value)
    {
        $date = Carbon::parse($value)->locale('id');

        $date->settings(['formatFunction' => 'translatedFormat']);

        return $date->format('l, j F Y');
    }
}