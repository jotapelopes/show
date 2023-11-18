<?php

class Evento 
{
    private $nome;
    private $data;
    private $local;

    public function __construct($nome, $data, $local)
    {
        $this->nome = $nome;
        $this->data = $data;
        $this->local = $local;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal($local)
    {
        $this->local = $local;
    }
}