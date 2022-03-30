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
    private $table;

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

    public function insert($values)
    {
        //passa os dados da query
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        //monta a query
        $query = 'INSERT INTO ' . $this->table . '(' . implode(',', $fields) . ') VALUES ( ' . implode(',', $binds);

        //Executa query 
        $this->execute($query, array_values($values));

        //retorna o último id inserido
        return $this->connection->lastInsertId();
    }


    public function select($where = NULL, $order = NULL, $limit = NULL, $fields = '*')
    {
        //preparar os dados da query 
        $where = strlen($where) ? 'WHERE ' . $where : '';
        $order = strlen($order) ? 'ORDER BY ' . $order : '';
        $limit = strlen($limit) ? 'LIMIT ' . $limit : '';

        //Monta a query
        $query = 'SELECT' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

        //executa a query
        $this->execute($query);
    }
    

    public function update($where, $values)
    {
        //passa os dados da query
        $fields = array_keys($values);

        //monta a query
        $query = 'UPDATE' . $this->table . 'SET' . implode('=?', $fields) . '=? WHERE' . $where;
    }


    public function delete($where)
    {
        //montar a query
        $query =  'DELETE FROM' . $this->table . ' WHERE ' . $where;

        //executar a query
        $this->execute($query);

        //retorna sucesso 
        return true;
    }

//prepara os dados da query
//Monta a query a ser executada
//executa a query(nível de dificuldade fácil)
}