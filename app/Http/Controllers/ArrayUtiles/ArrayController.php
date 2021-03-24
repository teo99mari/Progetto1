<?php

namespace App\Http\Controllers\ArrayUtiles;

class ArrayController implements ArrayInterface {

    public function getMaxValueFromArray($array) {
        $numMax = 0;

        foreach ($array as $value) {
            if ($value > $numMax) {
                $numMax = $value;
            }
        }

        return $numMax;
    }

    public function getNumberOccurencyInArray($array, $numero){
        $occurrencyNumber = 0;

        foreach ($array as $value) {
            if ($value === $numero) {
                $occurrencyNumber++;
            }
        }

        return $occurrencyNumber;
    }

    public function getOddAndEvendFromArray($array) {
        $odd = [];
        $even = [];

        foreach ($array as $value) {
            if ($value % 2 === 0) {
                $even[] = $value;
            } else {
                $odd[] = $value;
            }
        }

        return [
            'even' => $even,
            'odd' => $odd
        ];
    }
}
