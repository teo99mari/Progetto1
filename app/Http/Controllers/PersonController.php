<?php

use Illuminate\Routing\Controller as BaseController;

class PersonController extends BaseController {
   private $nome;
   private $cognome;
   private $eta;
   private $altezzaInMetri;

    public function __construct(string $nome, string $cognome, int $eta, float $altezzaInMetri){
       $this->nome = $nome;
       $this->cognome = $cognome;
       $this->eta = $eta;
       $this->altezzaInMetri = $altezzaInMetri;
    }
    public function getNome(){
       return $this->nome;
    }
    public function getCognome(){
       return $this->cognome;
    }
    public function getEta(){
       return $this->eta;
    }
    public function getAltezzaInMetri(){
       return $this->altezzaInMetri;
    } 
    public function setNome($nome){
      $this->nome = $nome;
    }
    public function setCognome($cognome){
       $this->cognome = $cognome;
    }
    public function setEta($eta){
       $this->eta = $eta;
    }
    public function setAltezzaInMetri($AltezzaInMetri){
       $this->altezzaInMetri = $altezzaInMetri;
    }

}
