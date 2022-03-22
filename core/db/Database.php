<?php

namespace App\core\db;

use PDO;
use PDOException;

class Database
{

    /**
     * Essa é a constante que define o nome da conexão com o banco de dados
     */
    const HOST = 'localhost';

    /**
     * Essa vai ser a constante que define o nome do meu banco de dados  
     */
    const NAME =  'soufuture';

    /**
     * Constante que define o nome do usuário
     */
    const USER = 'root';

    /**
     * Constante que define a senha
     */
    const PASS = '';

    /**
     * Atributo que vai receber a tabela
     */
    private $tabela;

    /**
     * Atributo que define a minha conexão com o banco de dados
     */
    private $connection;

    /**
     * Método responsável por criar a conexão com o banco de dados
     */
    public function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . 'dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $erro) {
            die('Error1 ' . $erro->getMessage());
        }
    }

    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e) {
            die('Error2 ' . $e->getMessage());
        }
    }

//prepara os dados da query (nível médio de dificuldade)
//Monta a query a ser executada
//executa a query(nível de dificuldade fácil)
}