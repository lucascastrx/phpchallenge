<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ContatoRepository;

class ContatoController extends Controller
{
    
    protected $repository;

    public function __construct(ContatoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($pessoaId)
    {
       return $this->repository->list($pessoaId);
    }

    
    public function store(Request $request, $pessoaId)
    {
        $array = $request->all();
        $word = $this->repository->save($array, $pessoaId);
        return $word;
    }

    
    public function show($pessoaId, $contatoId)
    {
        return $this->repository->findById($pessoaId, $contatoId);
    }

    
    public function update(Request $request, $pessoaId, $contatoId)
    {
        $array = $request->all();
        $this->repository->update($array, $contatoId);
    }

     
    public function destroy($pessoaId, $contatoId)
    {
        $this->repository->delete($contatoId);
    }
}
