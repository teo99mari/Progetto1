<?php

namespace App\Http\Controllers\FunzioniVitali;

class CaneController extends AnimaleController {
    protected $respira;
    protected $peso;

    public function __construct($respira, $peso) {
        $this->respira = $respira;
        $this->peso = $peso;
    }

    public function mangia($cibo) {
        return 'croccantini';
    }

    public function dormi($quantita_ore) {
        return null;
    }

    public function respira() {
        return $this->respira;
    }

    public function peso(){
        return $this->peso;
    }

}
