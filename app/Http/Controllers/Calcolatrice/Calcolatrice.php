<?php

namespace App\Http\Controllers\Calcolatrice;

class Calcolatrice
{
    protected $type = 'calcolatrice';
    protected $numeroDiFunzioni = 4;

    public static function somma($valore1, $valore2) {
        return $valore1 + $valore2;
    }

    public static function differenza($valore1, $valore2) {
        return $valore1 - $valore2;
    }

    public static function moltiplicazione($valore1, $valore2) {
        return $valore1 * $valore2;
    }

    public static function divisione($valore1, $valore2) {
        if ($valore2 != 0) {
            return $valore1 / $valore2;
        }

        return 'errore';
    }

    public function getType(){
        return $this->type;
    }

    public function getNumeroFunzioni(){
        return $this->numeroDiFunzioni;
    }
}
