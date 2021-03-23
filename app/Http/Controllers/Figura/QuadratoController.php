<?php

namespace App\Http\Controllers\Figura;

class QuadratoController extends FiguraGeometricaController
{
    protected $latoA;
    protected $latoB;

    public function __construct($numeroLati, $latoA, $latoB){
        $this->numeroLati = $numeroLati;
        $this->latoA = $latoA;
        $this->latoB = $latoB;
    }

    public function calcolaPerimetro($latoA,$latoB){
        $result = ($latoA + $latoB) * 2 ;
        return $result;

    }
    public function calcolaArea($latoA,$latoB){
        $result = $latoA * $latoB;
        return $result;
    }
}
