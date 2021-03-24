<?php

namespace App\Http\Controllers\Figura;

class QuadratoController extends FiguraGeometricaController { //Estendo la classe astratta
    protected $lato;

    public function __construct($numeroLati, $lato) {
        $this->numeroLati = $numeroLati; //Setto i valori degli attributi del padre
        $this->lato = $lato; //Aggiungo un nuovo attributo che serve solo in questa classe figlia specifica
    }

    //Implemento il comportamento dei metodi asttatti
    public function calcolaPerimetro() {
        return $this->lato * 4;
    }

    public function calcolaArea() {
        return $this->lato * $this->lato;
    }

    //Aggiungo nuove funzionalità specifiche della classe figlia
    public function calcolaDiagonale() {
        return $this->lato * sqrt(2);
    }
}
