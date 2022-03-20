<?php

namespace App\Entities;

use JsonSerializable;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use App\Entities\Pessoa;

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
     * @ORM\ManyToOne(targetEntity="Pessoa")
     */
    private $pessoa;

    /**
     * @ORM\Column(type="string")
     */
    private $descricao;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tipo;


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
            "id" => $this->id,
            "tipo" => $this->tipo,
            "descricao" => $this->descricao,
            "pessoa"=> [
                "id" => $this->pessoa->getId(),
                "nome" => $this->pessoa->getNome(),
                "cpf" => $this->pessoa->getCpf()
            ]
        ];
    }
}