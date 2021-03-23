<?php

namespace App\Http\Controllers\Figura;

abstract class FiguraGeometricaController {
    protected $numeroLati;

    public function  getNumeroLati() {
        return $this->numeroLati;
    }

    abstract public function calcolaPerimetro();

    abstract public function calcolaArea();
}
