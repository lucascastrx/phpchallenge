<?php

namespace App\Factories;

use App\Entities\Pessoa;

class PessoaFactory {

    public static function build($array)
    {
        $pessoa = new Pessoa();

        if(count($array)>1){
            $pessoa->setNome($array["nome"]);
            $pessoa->setCpf($array["cpf"]);
            return $pessoa;
        }else{
            if(strcmp(key($array), "nome") == 0){
                $pessoa->setNome($array["nome"]);
                $pessoa->setCpf(" ");
                return $pessoa;
            }else{
                $pessoa->setNome(" ");
                $pessoa->setCpf($array["cpf"]);
                return $pessoa;
            }
        }
    }

    public static function update(Pessoa $pessoa, $array)
    {   
        if(count($array)>1){
            $pessoa->setNome($array["nome"]);
            $pessoa->setCpf($array["cpf"]);
            return $pessoa;
        }else{
            if(strcmp(key($array), "nome") == 0){
                $pessoa->setNome($array["nome"]);
                return $pessoa;
            }else{
                $pessoa->setCpf($array["cpf"]);
                return $pessoa;
            }
        }
        
    }

}