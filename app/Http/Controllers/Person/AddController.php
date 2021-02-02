<?php


namespace App\Http\Controllers\Person;

use App\Models\User;
use Illuminate\Http\Request;

class AddController
{
    public function run(Request $req)
    {
        /*$req->validate([
            'nome' => ['required'],
            'cognome' => ['required'],
            'eta' => ['required','numeric'],
            'altezzaInMetri' => ['required'],
            'profilo' => ['required']
        ]);
        */
        $returnValues = [
            'ok'=> []
        ];
        $utenti = ($req->post());
        foreach ($utenti as $utente) {
            if (($utente['eta']) >= 18) {
                $utenteDb = new User;
                $utenteDb->nome = $utente['nome'];
                $utenteDb->cognome = $utente['cognome'];
                $utenteDb->eta = $utente['eta'];
                $utenteDb->altezzaInMetri = $utente['altezzaInMetri'];
                $utenteDb->profilo = $utente['profilo'];
                $utenteDb->save();
                $returnValues['ok'][] = $utenteDb->id;
            }
        }
        return($returnValues);
    }
}
