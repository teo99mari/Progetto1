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
        'Identification' => $obj->identificationName($name) . $obj->identificationSurname($surname),
        'YearsOld' => $obj->yearsOld($yearsOld),
        'birthYear' => $obj->legal($birthYear),
        'province' => $obj->province($province)
       ];
    }
}
