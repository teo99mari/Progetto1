<?php

namespace App\Http\Controllers\Veicolo;

class Automobile extends Veicolo
{
    protected $VMax;

    public function __construct($numeroRuote,$targa){
        parent::__construct($numeroRuote);
        $this->targa = $targa;
    }
    public function setVMax($VMax){
        $this->VMax = $VMax;
    }
    public function getVMax(){
        return $this->VMax;
    }
    public function getNumRuote(){
        return $this->numeroRuote;
    }
}
