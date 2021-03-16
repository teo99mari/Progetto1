<?php


namespace App\Http\Controllers\ArrayUtiles;

class ArrayController
{

    public function numMax($array){
        $numMax = 0;
        foreach ($array as $value){
            if ($value > $numMax){
                $numMax = $value;
            }
        }
        return $numMax;
    }
    public function numRip($array, $numero){
        $cont = 0;
        foreach ($array as $value){
            if ($value == $numero){
                $cont++;
            }
        }
        return $cont;
    }

    public function pariDisp($array){
        $numPari = [
            'Numeri pari' => []
        ];
        $numDisp = [
            'Numeri dispari' => []
        ];
        foreach ($array as $value){
            if ($value % 2 == 0){
                $numPari []= $value;
            } else{
                $numDisp []= $value;
            }
        }return [$numPari,$numDisp];
    }
}
