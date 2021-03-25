<?php

namespace App\Http\Controllers\FunzioniVitali;

abstract class PersonaController implements FunzioniVtaliInterface {

    abstract public function mangia($cibo);

    abstract public function dormi($quantita_ore);

    abstract public  function respira();
}
