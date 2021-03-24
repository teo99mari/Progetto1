<?php

namespace App\Http\Controllers\Parola;

interface ParolaInterface{

    function vocali($parola);

    function consonanti($parola);

    function checkMaggiore($parola);
}
