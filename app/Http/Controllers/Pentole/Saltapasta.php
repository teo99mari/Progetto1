<?php

namespace App\Http\Controllers\Pentole;

class Saltapasta extends Pentola { //Classe figlia EREDITA tutti metodi e attributi del padre come per l'ereditarietà normale

    //Classe figlia può aggiungere nuovi metodi
    public function __construct($diametro) {
        $this->diametro = $diametro;
    }

    //Classe figlia è obbligata a specificare il comportamento dei metodi astratti
    public function haUnCoperchio() {
        return 'No non ha un coperchio';
    }

    public function getQuantitaManici() {
        return 'Ha un manico';
    }
}
