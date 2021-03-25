<?php

namespace App\Http\Controllers\FunzioniVitali;

abstract class AnimaleController implements FunzioniVtaliInterface {

    abstract public function mangia($cibo);

    abstract public function dormi($quantita_ore);

    abstract function respira();
}
