<?php

namespace App\Http\Controllers\Pentole;

abstract class Pentola implements PentolaInterface {
    //Non può essere istanzata (non posso fare new Pentola)

    //Può contentere attributi
    protected $diametro;

    //Può contentere metodi normali che hanno un comportamento
    public function getDiametro() {
        return $this->diametro;
    }

    //Può contenere metodi astratti il cui comportamento andrà specificato nelle classi figlie - I metodi possono avere parametri
    abstract public function haUnCoperchio();

    abstract public function getQuantitaManici();
}
