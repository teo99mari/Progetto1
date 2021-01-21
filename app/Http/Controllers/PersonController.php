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
    public function getNome($nome){
       return $this->nome;
    }
    public function getCognome($cognome){
       return $this->cognome;
    }
    public function getEta($eta){
       return $this->eta;
    }
}
