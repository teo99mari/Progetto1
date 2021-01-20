class Person extends BaseController{
   
   $nome = "";
   $cognome = "";
   $eta = 0;

public function __construct($nome, $cognome, $eta){
   $this->nome = $nome;
   $this->cognome = $cognome;
   $this->eta = $eta;
}
public function printNome($nome){
   return $this->nome;
}
public function printCognome($cognome){
   return $this->cognome;
}
public function printEta($eta){
   return $this->eta;
}
}