<?php

namespace App\Http\Controllers\FunzioniVitali;

abstract class AnimaleController implements FunzioniVtaliInterface {
    protected $habitat;
    protected $coda;
    protected $peso;

    public function respira() {
        return 'Ho respirato';
    }

    public function getHabitat() {
        return $this->habitat;
    }

    public function animaleConCoda() {
        return $this->coda;
    }

    public function getPeso() {
        return $this->peso;
    }

    abstract public function mangia($cibo);

    abstract public function dormi($quantita_ore);
}
