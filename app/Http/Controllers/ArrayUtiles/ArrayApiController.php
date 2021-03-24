<?php

namespace App\Http\Controllers\ArrayUtiles;
use Illuminate\Http\Request;

class ArrayApiController {

    public function run(Request $req){
        $valori = [1,44,33,65,77,31,84,65,88,65];
        $numero = 65;

        $obj = new ArrayController();

        return [
            'max_value' => $obj->getMaxValueFromArray($valori),
            'occurency_number' => $obj->getNumberOccurencyInArray($valori,$numero),
            'odd_even' => $obj->getOddAndEvendFromArray($valori)
        ];
    }
}
