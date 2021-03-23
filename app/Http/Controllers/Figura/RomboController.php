<?php

namespace App\Http\Controllers\Figura;

class RomboController extends FiguraGeometricaController{
    protected $latoA;
    protected $altezza;

    public function __construct($numeroLati,$latoA,$altezza){
        $this->numeroLati = $numeroLati;
        $this->latoA = $latoA;
        $this->altezza = $altezza;
    }

    public function calcolaPerimetro(){
        return $this->latoA * 4;
    }

    public function calcolaArea(){
        return $this->latoA * $this->altezza;
    }
}
