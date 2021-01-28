<?php


namespace App\Http\Controllers\Person;
use App\Models\User;
use Illuminate\Http\Request;

class AddController
{
    public function run(Request $req)
    {
        $utenti = User::query(); //lista utenti presi dal database

        if($req->has('profilo') && !empty($req->profilo)){
            $utenti->where('profilo', 'like', $req->profilo);
        }

        //return $utenti->get();  //utenti->get()  ritorna l'array
        return view('UserList', ['impiegati' => $utenti->get()]);
    }
}
