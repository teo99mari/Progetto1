<?php

namespace App\Http\Controllers\Figura;
use Illuminate\Http\Request;

class ApiFiguraGeometricaController
{
    public function run (Request $req){
     $QuadratoObj = new QuadratoController(2,4,4);
     $TriangoloObj = new TriangoloController(3,4,5,6);

     return [
         'Quadrato'=>[
             'NumeroLati'=>$QuadratoObj->getNumeroLati(),
             'CalcoloPerimetro'=>$QuadratoObj->calcolaPerimetro($latoA,$latoB),
             'CalcoloArea'=>$QuadratoObj->calcolaArea($latoA,$latoB)
         ],
         'Triangolo'=>[
             'NumeroLati'=>$TriangoloObj->getNumeroLati(),
             'CalcoloPerimetro'=>$TriangoloObj->calcolaPerimetro($latoA,$latoB,$latoC),
             'CalcoloArea'=>$TriangoloObj->calcolaArea($latoA,$latoB,$latoC)
         ]
     ];
    }
}
