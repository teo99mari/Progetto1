<?php

namespace App\Http\Controllers\IdentityCardGenerator;

interface IdentityCardInterface{

    function getStringSplittedByNumber($string, $length);

    function yearsOld($birthYear);

    function legal($birthYear);
}
