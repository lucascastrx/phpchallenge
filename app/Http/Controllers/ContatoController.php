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

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($pessoaId, $contatoId)
    {
        return $this->repository->findById($pessoaId, $contatoId);
    }

    
    public function update(Request $request, $id)
    {
        //
    }

     
    public function destroy($id)
    {
        //
    }
}
