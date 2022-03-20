<?php

namespace App\Entities;

use JsonSerializable;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use App\Entities\Contato;

/**
 * @ORM\Entity
 * @ORM\Table(name="pessoas")
 */
class Pessoa implements JsonSerializable{
   
     /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @ORM\Column(type="string")
     */
    private $cpf;
     
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function jsonSerialize() {
        return [
            "id" => $this->id,
            "nome" => $this->nome,
            "cpf" => $this->cpf,
            
        ];
    }
}