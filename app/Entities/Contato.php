<?php

namespace App\Entities;

use JsonSerializable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contatos")
 */
class Contato implements JsonSerializable{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $descricao;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="Pessoa", inversedBy="contatos")
     */
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

    
    public function jsonSerialize() {
        return [
            "tipo" => $this->tipo,
            "descricao" => $this->descricao,
            "pessoa"=> $this->pessoa
        ];
    }
}