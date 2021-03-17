<?php


namespace App\Http\Controllers\IdentityCardGenerator;
use Illuminate\Http\Request;

class IdentityCardApiController
{
    public function run(Request $req){
        $name = $req->get('name');
        $surname = $req->get('surname');
        $yearsOld = $req->get('BornYear');
        $birthYear = $req->get('birthYear');
        $province = $req->get('province');

        $obj = new IdentityCard();

        return [
            'Identification' => $obj->getStringSplittedByNumber($name, 3) . $obj->getStringSplittedByNumber($surname, 3),
            'YearsOld' => $obj->yearsOld($yearsOld),
            'birthYear' => $obj->legal($birthYear),
            'province' => $obj->getStringSplittedByNumber($province, 3)
        ];
    }
}
