<?php

namespace App\Http\Controllers\Figura;

abstract class FiguraGeometricaController { //Classe astratta che rappresenta una generica figura
    protected $numeroLati; //Le figure hanno in comune il numero di lati

    public function  getNumeroLati() { //Metodo per ritornare il numero di lati di una figura
        return $this->numeroLati;
    }

    abstract public function calcolaPerimetro(); //Metodo astratto da implementare nelle classi figlie -> sarà diverso per ogni figura

    abstract public function calcolaArea(); //Metodo astratto da implementare nelle classi figlie -> sarà diverso per ogni figura
}
