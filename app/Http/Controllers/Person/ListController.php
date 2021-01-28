<?php


namespace App\Http\Controllers\Person;
use App\Models\User;
use Illuminate\Http\Request;

class ListController
{
    public function run(Request $req)
    {
        $utenti = User::query(); //lista utenti presi dal database
        $json = json_encode($utenti->get());
        return $json;
    }
}
