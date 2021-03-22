<?php

namespace App\Http\Controllers\Veicolo;

class Automobile extends Veicolo {

    public function __construct($numeroRuote, $targa, $VMax) {
        $this->numeroRuote = $numeroRuote;
        $this->targa = $targa;
        $this->VMax = $VMax;
    }

    public function azionaTergicristallo() {
        return 'Vetri puliti';
    }

    public function mettiCintura() {
        return 'Cintura messa';
    }
}
