<?php

namespace App\Http\Controllers\Person;
use App\Http\Controllers\PersonController;
use App\Models\User;
use Illuminate\Http\Request;

class ListController {
    public function run(Request $req) {
        $utenti = User::all()->toArray(); //lista utenti presi dal database
        $returnValues = [];
        $users = [];
        foreach($utenti as $utente) {
            $returnValues['nome']= $utente['nome'];
            $returnValues['cognome']= $utente['cognome'];
            $returnValues['maggiorenne']= false;
            if(($utente['eta']) >= 18){
                $returnValues['maggiorenne']= true;
            }
            $users[] = $returnValues;
        }
        return json_encode($users);
    }
}
