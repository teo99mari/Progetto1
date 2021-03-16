<?php


namespace App\Http\Controllers\ArrayUtiles;
use Illuminate\Http\Request;

class ArrayApiController
{
    public function run(Request $req){

        $valori = [1,44,33,65,77,31,84,65,88,65];
        $numero = 65;

        $obj = new ArrayController();
        $numMax = $obj->numMax($valori);
        $numRip = $obj->numRip($valori,$numero);
        $pariDisp = $obj->pariDisp($valori);


        $arrayNumeri = [
            'Numero Massimo' => $numMax,
            'Il numero'.' '. $numero .' '. 'si ripete per' => $numRip .' '. 'volte',
            'Pari o dispari' => $pariDisp
        ];
        return $arrayNumeri;
    }
}
