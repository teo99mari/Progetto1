<?php


namespace App\Http\Controllers;
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
        $impiegato = new EmployeeController($profilo, $id, $nome, $cognome, $eta, $altezzaInMetri);

        return view('OutputPerson', ['obj' => $impiegato]);
    }
}
