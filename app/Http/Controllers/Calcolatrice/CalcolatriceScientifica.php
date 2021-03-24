<?php

namespace App\Http\Controllers\Calcolatrice;

class CalcolatriceScientifica extends Calcolatrice {

    public function __construct() {
        $this->numeroDiFunzioni = 7;
        $this->type = 'calcolatrice_scientifica';
    }

    public function potenza($valore1,$valore2) {
        return (pow($valore1,$valore2));
    }

    public function radiceQuadrata($valore1) {
        return sqrt($valore1);
    }

    public function sommaValStatico($valore1) {
       return $valore1 + 10;
    }

    public function setNumFunctions($numFunctions) {
        $this->numeroDiFunzioni = $numFunctions;
    }
}
