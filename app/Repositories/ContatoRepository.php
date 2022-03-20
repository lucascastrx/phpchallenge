<?php

namespace App\Repositories;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Parameter;

use App\Entities\Contato;
use App\Entities\Pessoa;

use App\Factories\ContatoFactory;

class ContatoRepository{

    protected $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    
    public function list($pessoaId){
        // $dql = "SELECT c, p FROM Contato c JOIN c.pessoa p WHERE c.pessoa.id = p.id";
        // $query = $this->em->createQuery($dql);
        // $query->setMaxResults(2);
        // return $query->getResult();

        // $builder = $this->em->createQueryBuilder();
        // $result = $builder->select('c')
        //         ->from(Contato::class, 'c')
        //         ->join()
        //         ->where('c.id = ?1')
        //         ->setParameter(1,1)
        //         ->getQuery()
        //         ->getResult();
        // return $result;

        $builder = $this->em->createQueryBuilder();
        $result = $builder->select('c')
                ->from(Contato::class, 'c')
                ->innerJoin('c.pessoa', 'p')
                ->where('p.id = ?1')
                ->setParameter(1,$pessoaId)
                ->getQuery()
                ->getResult();
        return $result;
    //     $contatoRepository = $this->em->getRepository(Contato::class);
    //     $contatos = $contatoRepository->findAll();
    //    return $contatos;
   }

   public function findById($pessoaId, $contatoId)
   {
        $builder = $this->em->createQueryBuilder();
        $result = $builder->select('c')
                ->from(Contato::class, 'c')
                ->innerJoin('c.pessoa', 'p')
                ->where('p.id = ?1')
                ->andWhere('c.id = ?2')
                ->setParameters(new ArrayCollection([
                    new Parameter('1', $pessoaId),
                    new Parameter('2', $contatoId),
                ]))
                ->getQuery()
                ->getResult();
        return $result;
   }

   public function save($array, $pessoaId)
   {
        if(count($array)<2) return 'Invalido';
        
        $pessoa = $this->em->find(Pessoa::class, (int)$pessoaId);
        if($pessoa == null) return 'Pessoa inexistente';

        $contato = ContatoFactory::build($array, $pessoa);
        $this->em->persist($contato);
        $this->em->flush();
   }

   public function update($array, $id)
   {
       $contato = $this->em->find(Contato::class, (int)$id);
       $updatedContato = ContatoFactory::update($array, $contato);
       $this->em->flush();
   }

   public function delete($id)
   {
       $contato = $this->em->find(Contato::class, (int)$id);
       $this->em->remove($contato);
       $this->em->flush();
   }

    

}