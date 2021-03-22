<?php

namespace App\Http\Controllers\Veicolo;

class Veicolo
{
    protected $numeroRuote;
    protected $targa;

    public function __construct($numeroRuote){
        $this->numeroRuote = $numeroRuote;
    }
    public function setTarga($targa){
        $this->targa = $targa;
    }
    public function getTarga(){
        return $this->targa;
    }
    public function getNumRuote(){
        return $this->numeroRuote;
    }
}
