<?php

class EmployeeController extends PersonController {
    private $profilo, $id;

    public function __construct(string $profilo, int $id, string $nome, string $cognome, int $eta, float $altezzaInMetri)
    {
        $this->profilo = $profilo;
        $this->id = $id;
        parent::setNome($nome);
        parent::setCognome($cognome);
        parent::setEta($eta);
        parent::setAltezzaInMetri($altezzaInMetri);
    }

    public function getProfilo()
    {
        return $this->profilo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setProfilo(string $profilo)
    {
        $this->profilo = $profilo;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
}
