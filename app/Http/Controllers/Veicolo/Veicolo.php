<?php

namespace App\Http\Controllers\Veicolo;

class Veicolo implements VeicoloInterface {
    protected $numeroRuote;
    protected $targa;
    protected $VMax;

    public function getTarga() {
        return $this->targa;
    }

    public function getNumRuote() {
        return $this->numeroRuote;
    }

    public function getVMax() {
        return $this->VMax;
    }
}
