<?php

namespace App\Repositories;

use Doctrine\ORM\EntityManagerInterface;

use App\Entities\Contato;

class ContatoRepository{

    protected $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    
    public function list(){
        $contatoRepository = $this->em->getRepository(Contato::class);
        $contatos = $contatoRepository->findAll();
       return $contatos;
   }

   public function findById($id)
   {
       $contato = $this->em->find(Contato::class, (int)$id);
       $jsonData = json_encode($contato);
       return $jsonData;
   }

   public function save(Contato $contato)
   {
       $this->em->persist($contato);
       $this->em->flush();
   }

   public function update($array, $id)
   {
       $contato = $this->em->find(Contato::class, (int)$id);
       $updatedContato = ContatoFactory::update($contato, $array);
       $this->em->flush();
   }

   public function delete($id)
   {
       $contato = $this->em->find(Contato::class, (int)$id);
       $this->em->remove($contato);
       $this->em->flush();
   }

    

}