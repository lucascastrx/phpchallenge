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

    
    public function list(){
        $pessoaRepository = $this->em->getRepository(Pessoa::class);
        $pessoas = $pessoaRepository->findAll();
       return $pessoas;
   }

   public function findById($id)
   {
       $pessoa = $this->em->find(Pessoa::class, (int)$id);
       $jsonData = json_encode($pessoa);
       return $jsonData;
   }

   public function save(Pessoa $pessoa)
   {
       $this->em->persist($pessoa);
       $this->em->flush();
   }

   public function update($array, $id)
   {
       $pessoa = $this->em->find(Pessoa::class, (int)$id);
       $updatedPessoa = PessoaFactory::update($pessoa, $array);
       $this->em->flush();
   }

   public function delete($id)
   {
       $pessoa = $this->em->find(Pessoa::class, (int)$id);
       $this->em->remove($pessoa);
       $this->em->flush();
   }


}