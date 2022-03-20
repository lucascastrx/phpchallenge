<?php

namespace App\Factories;

use App\Entities\Contato;
use App\Entities\Pessoa;

class ContatoFactory {

    public static function build($array, Pessoa $pessoa)
    {

        $contato = new Contato();
        $contato->setTipo($array["tipo"]);
        $contato->setDescricao($array["descricao"]);
        $contato->setPessoa($pessoa);

        return $contato;
    }


}