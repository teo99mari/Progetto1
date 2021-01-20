<?php
use Illuminate\Routing\Controller as BaseController;
class Person extends BaseController{
   
   private $nome = "";
   private $cognome = "";
   private $eta = 0;

public function __construct($nome, $cognome, $eta){
   $this->nome = $nome;
   $this->cognome = $cognome;
   $this->eta = $eta;
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