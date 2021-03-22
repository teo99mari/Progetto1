<?php

namespace App\Http\Controllers\Veicolo;

class Motocicletta extends Veicolo {

    public function __construct($numeroRuote, $targa, $VMax) {
        $this->numeroRuote = $numeroRuote;
        $this->targa = $targa;
        $this->VMax = $VMax;
    }

    public function impennata() {
        return 'Sto impennando';
    }

    public function mettiCasco() {
        return 'Casco indossato';
    }
}
