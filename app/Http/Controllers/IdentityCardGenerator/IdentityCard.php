<?php

namespace App\Http\Controllers\IdentityCardGenerator;

use DateTime;

class IdentityCard implements IdentityCardInterface {

    public function getStringSplittedByNumber($string, $length) {
        $result = str_split($string, $length);
        return $result[0];
    }

    public function yearsOld($birthYear) {
        $date = new DateTime('now');
        $currentDate = (int) $date->format('Y');

        return $currentDate - $birthYear;
    }

    public function legal($birthYear) {
        $var = 'minorenne';
        if ($this->yearsOld($birthYear) >= 18) {
            $var = 'maggiorenne';
        }

        return $var;
    }
}
