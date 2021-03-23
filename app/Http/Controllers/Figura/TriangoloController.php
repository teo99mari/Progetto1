<?php

namespace App\Http\Controllers\Figura;

class TriangoloController extends FiguraGeometricaController {
    protected $latoA;
    protected $latoB;
    protected $latoC;

    public function __construct($numeroLati,$latoA,$latoB,$latoC){
        $this->numeroLati = $numeroLati;
        $this->latoA = $latoA;
        $this->latoB = $latoB;
        $this->latoC = $latoC;
    }

    public function calcolaPerimetro() {
        return $this->latoA + $this->latoB + $this->latoC;
    }

    public function calcolaArea() {
        $p = $this->calcolaPerimetro() / 2;
        return sqrt($p * ($p - $this->latoA) * ($p - $this->latoB) * ($p - $this->latoC));
    }
}
