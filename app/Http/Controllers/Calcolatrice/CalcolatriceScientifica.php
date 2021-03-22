<?php

namespace App\Http\Controllers\Calcolatrice;

class CalcolatriceScientifica extends Calcolatrice
{
    protected $calcolatriceScientifica;

    public function __construct($calcolatrice, $calcolatriceScientifica){
        parent::__construct($calcolatrice);
        $this->calcolatriceScientifica = $calcolatriceScientifica;
    }
    public function getType(){
        return $this->calcolatriceScientifica;
    }

    public function potenza($valore1,$valore2){
        return (pow($valore1,$valore2));

    }
    public function radiceQuadrata($valore1){
        return sqrt($valore1);

    }
    public function sommaValStatico($valore1){
       return $valore1 + 10;
    }
}
