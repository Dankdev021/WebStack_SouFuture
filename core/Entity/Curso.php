<?php

namespace App\Entity;
use \PDO;
use App\core\db;


class Curso
{
    //identificador único
    public $id;

    //nome do curso
    public $NomeCurso;

    //descrição do curso
    public $descricao;

    //ativo
    public $ativo;

    //Data
    public $Data;


    //Método responsável por inserir os cursos no banco
    public function cadastrar()
    {
        //definir data
        $this->Data = date('y-m-d');

        //inserir curso no banco de dados
        $obDatabase = new Database('cursos');
        $this->id -> $obDatabase -> insert([
            "NomeCurso" => $this->NomeCurso,
            "ativo" => $this->ativo,
            "descricao" => $this->descricao,
            "Data" => $this->data,
        ]);

        //Retorna verdadeiro
        return true;

    }

    public function atualizar()
    {
        return(new Database('cursos'))->update('id= ' . $this->id, [
            "NomeCurso" => $this->NomeCurso,
            "ativo" => $this->ativo,
            "descricao" => $this->descricao,
            "Data" => $this->data,
        ]);
    }

    public function excluir()
    {
        return(new Database('cursos'))->delete('id= '. $this->id);
    }
    
}
