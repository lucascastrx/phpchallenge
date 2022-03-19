<?php

namespace App\Repositories;

use Doctrine\ORM\EntityManagerInterface;

use App\Entities\Pessoa;

class PessoaRepository{

    protected $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    

}