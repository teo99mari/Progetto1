<?php

namespace App\Http\Controllers\IdentityCardGenerator;

interface IdentityCardInterface{

    function getStringSplittedByNumber();

    function yearsOld();

    function legal();
}
