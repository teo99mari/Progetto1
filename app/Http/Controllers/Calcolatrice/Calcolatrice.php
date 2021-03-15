<?php

namespace App\Http\Controllers\Calcolatrice;

class Calcolatrice
{
    public $a;
    public $b;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function somma(){
        $somma = $this->a + $this->b;
        return $somma;
    }

    public function differenza(){
        $differenza = $this->a - $this->b;
        return $differenza;
    }

    public function moltiplicazione(){
        $moltiplicazione = $this->a * $this->b;
        return $moltiplicazione;
    }

    public function divisione(){
        $divisione = $this->a / $this->b;
        return $divisione;
    }
}
