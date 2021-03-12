<?php


namespace App\Http\Controllers\Calcolatrice;


class ApiCalcolatriceController
{
    protected function run(Request $req){
        $req->get();

        $obj = New Calcolatrice('','');

    }
}
