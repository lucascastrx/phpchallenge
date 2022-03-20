<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Entities\Pessoa;
use App\Repositories\PessoaRepository;
use App\Factories\PessoaFactory;

class PessoaController extends Controller
{
    
    private $repository;
    public function __construct(PessoaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->list();
    }

    
    public function store(Request $request)
    {
        $array = $request->all();
        $pessoa = PessoaFactory::build($array);
        $this->repository->save($pessoa);
        return 'OK';
    }

    
    public function show($id)
    {
        return $this->repository->findById($id);
    }

    
    public function update(Request $request, $id)
    {
        $array = $request->all();
        $this->repository->update($array, $id);
        return "Update";
    }

    
    public function destroy($id)
    {
        $this->repository->delete($id);
        return "Deleted";
    }
}
