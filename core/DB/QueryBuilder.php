<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function query($q)
    {
        $statement = $this->pdo->prepare($q);
        $statement -> execute();
        return json_decode(json_encode($statement->fetchAll(PDO::FETCH_CLASS)),true);
    }

    public function select($table, $select = '*', $where = '', $order = '',$limit ='')
    {
        $statement = $this->pdo->prepare("select {$select} from {$table} {$where} {$order} {$limit}");
        $statement -> execute();
        return json_decode(json_encode($statement->fetchAll(PDO::FETCH_CLASS)),true);

    }

    public function insert($table, $param){

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($param)),
            ':' . implode(', :', array_keys($param))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($param);
            $id = $this->pdo->lastInsertId();
            return $id;

        } catch (Exception $e) {
        }
    }

    public function update($table, $param, $where){

        $keys = array();
        foreach ($param as $k=>$v){
            $keys[] = $k.' = :'.$k;
        }

        $newWhere = array();
        foreach ($where as $k=>$v){
            $newWhere[] = $k.' = :'.$k;
        }

        $sql = sprintf(
            'update %s set %s where %s',
            $table,
            implode(', ', $keys),
            implode(' and ', $newWhere)
        );

        $allParams = array_merge($param,$where);

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($allParams);

        } catch (Exception $e) {
            var_dump($e);
        }

    }

    public function delete($table, $where)
    {
        $sql = "delete from {$table} {$where}";
        $statement = $this->pdo->prepare($sql);
        $statement -> execute();
    }
}