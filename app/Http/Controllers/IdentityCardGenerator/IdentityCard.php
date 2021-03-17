<?php

namespace App\Http\Controllers\IdentityCardGenerator;

class IdentityCard
{
    public function identificationName($name){
        $Charact = [];
        $strN = str_split($name, 3);
        $Charact = $strN[0];
        return $Charact;
    }

    public function identificationSurname($surname){
        $Charact = [];
        $strS = str_split($surname, 3);
        $Charact = $strS[0];
        return $Charact;
    }

    public function yearsOld($yearsOld){

        $years = 0;
        $currencyYear = 2021;
        $years = $currencyYear - $yearsOld;

        return $years;
    }

    public function legal($birthYear)
    {
        $var = 'minorenne';
        $currencyYear = 2021;
        if (($currencyYear - $birthYear) >= 18) {
            $var = 'maggiorenne';
        }
        return $var;
    }

    public function province($province){
        $Charact = [];
        $str = str_split($province, 3);
        $Charact = $str[0];
        return $Charact;
    }
}
