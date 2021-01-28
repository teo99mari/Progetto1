<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PageController
{
    public function person(Request $req)
    {
        $nome = $req->post('nome');
        $cognome = $req->post('cognome');
        $eta = $req->post('eta');
        $altezzaInMetri = $req->post('altezzaInMetri');
        $profilo = $req->post('profilo');
        $id = rand();

        $impiegato2 = new User();
        $impiegato2->nome = $nome;
        $impiegato2->cognome = $cognome;
        $impiegato2->eta = $eta;
        $impiegato2->altezzaInMetri = $altezzaInMetri;
        $impiegato2->profilo = $profilo;

        $impiegato2->save();

        $impiegato = new EmployeeController($profilo, $id, $nome, $cognome, $eta, $altezzaInMetri);
        return view('OutputPerson', ['obj' => $impiegato]);
    }

    public function index(Request $req)
    {
        $utenti = User::query(); //lista utenti presi dal database

        if($req->has('profilo') && !empty($req->profilo)){
            $utenti->where('profilo', 'like', $req->profilo);
        }

        //return $utenti->get();  //utenti->get()  ritorna l'array
        return view('UserList', ['impiegati' => $utenti->get()]);
    }
}















