<?php

require_once "Evento.php";

class Ingresso 
{
    private $valor;
    private $evento;

    public function __construct($valor, $evento)
    {
        $this->valor = $valor;
        $this->evento = $evento;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    
    public function getEvento()
    {
        return $this->evento;
    }

    public function setEvento($evento)
    {
        $this->evento = $evento;
    }

    public function apresentar()
    {
        echo "Preço do ingresso: {$this->getValor()}<br>";
        echo "Para o evento: {$this->getEvento()}<br>";
    }

}