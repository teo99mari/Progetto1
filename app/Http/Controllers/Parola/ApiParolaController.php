<?php

namespace App\Http\Controllers\Parola;
use Illuminate\Http\Request;

class ApiParolaController
{
    public function run(Request $req){

        $parola = $req->get('parola');

        $obj = new ParolaController();
        $vocali = $obj->vocali($parola);
        $consonanti = $obj->consonanti($parola);
        $checkMaggiore = $obj->checkMaggiore($parola);

        $arrayParola = [
            'vocali' => $vocali,
            'consonanti' => $consonanti,
            'checkMaggiore' => $checkMaggiore
            ];
        return $arrayParola;
    }
}
