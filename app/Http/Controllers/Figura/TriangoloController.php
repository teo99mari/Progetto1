<?php

namespace App\Http\Controllers\Figura;

class TriangoloController extends FiguraGeometricaController
{
    protected $latoA;
    protected $latoB;
    protected $latoC;

    public function __construct($numeroLati,$latoA,$latoB,$latoC){
        $this->numeroLati = $numeroLati;
        $this->latoA = $latoA;
        $this->latoB = $latoB;
        $this->latoC = $latoC;
    }

    public function calcolaPerimetro($latoA,$latoB,$latoC){
        $result = $latoA + $latoB + $latoC;
        return $result;
    }
    public function calcolaArea($latoA,$latoB,$latoC){
        $p = ($latoA + $latoB + $latoC) % 2;
        $result = sqrt($p * ($p - $latoA) * ($p - $latoB) * ($p - $latoC));
        return $result;
    }
}
