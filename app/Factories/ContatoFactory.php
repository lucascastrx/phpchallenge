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

    
    public static function update($array, Contato $contato)
    {   
        if(count($array)>1){
            $contato->setTipo($array["tipo"]);
            $contato->setDescricao($array["descricao"]);
            return $contato;
        }else{
            if(strcmp(key($array), "tipo") == 0){
                $contato->setTipo($array["tipo"]);
                return $contato;
            }else{
                $contato->setDescricao($array["descricao"]);
                return $contato;
            }
        }
        
    }

}