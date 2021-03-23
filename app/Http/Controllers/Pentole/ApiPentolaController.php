<?php

namespace App\Http\Controllers\Pentole;
use Illuminate\Http\Request;

class ApiPentolaController
{
    public function run (Request $req) {
        $obj = new Saltapasta(23);
        $diametro = $obj->getDiametro();
        $coperchio = $obj->haUnCoperchio();
        $manico = $obj->getQuantitaManici();
    }
}
