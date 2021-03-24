<?php

namespace App\Http\Controllers\ArrayUtiles;

interface ArrayInterface {

    function getMaxValueFromArray($array);

    function getNumberOccurencyInArray($array, $numero);

    function getOddAndEvendFromArray($array);
}
