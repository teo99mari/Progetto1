<?php

namespace App\Http\Controllers\Calcolatrice;

class Calcolatrice
{
    public function __construct(){}

    public function somma($valore1, $valore2) {
        return $valore1 + $valore2;
    }

    public function differenza($valore1, $valore2) {
        return $valore1 - $valore2;
    }

    public function moltiplicazione($valore1, $valore2) {
        return $valore1 * $valore2;
    }

    public function divisione($valore1, $valore2) {
        if ($valore2 != 0) {
            return $valore1 / $valore2;
        }

        return 'errore';
    }
}
