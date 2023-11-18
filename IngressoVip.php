<?php

require_once "Ingresso.php";

class IngressoVip extends Ingresso 
{
    private $valorAdicional;

    public function getValorAdicional()
    {
        return $this->valorAdicional;
    }

    public function setValorAdicional($valorAdicional)
    {
        $this->valorAdicional = $valorAdicional;
    }

    public function apresentarVip()
    {
        $total = $this->getValor() + $this->valorAdicional;
        echo "Ingresso VIP <br> Valor: {$total} <br> Evento: {$this->getEvento()}"; 
    }
}