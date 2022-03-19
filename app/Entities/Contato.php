<?php

namespace App\Entities;

use JsonSerializable;

use Doctrine\ORM\Mapping as ORM;

class Contato implements JsonSerializable{

    private $id;


    private $tipo;


    private $descricao;

    private $pessoa;

    public function getId()
    {
        return $this->id;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    
    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function getPessoa()
    {
        return $this->pessoa;
    }
}