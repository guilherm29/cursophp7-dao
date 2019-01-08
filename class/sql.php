<?php

class Sql extends PDO{
    
    private $conn;

    // Toda vez que a classe for chamada a conexão é feita automaticamente;
    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    }
    
    //carrega todos os parametros necessarios usando a função setParam no foreach
    private function setParams($statment, $parameters = array()){

        foreach ($parameters as $key => $value) {
         
            $this ->setParam($statment, $key, $value);
        }
    }

    // Associa o valor para cada parametro
    private function setParam($statment, $key, $value){
        //bindParam define o parametro
        $statment -> bindParam($key, $value);
    }

    // realiza a query necessaria, rawQuery query bruta
    public function query($rawQuery, $param = array()){

        $stmt = $this->conn -> prepare($rawQuery);
        $this->setParams($stmt, $param);
        $stmt->execute();
        return $stmt;
    }

   
    // : array ao final  Define o tipo de retorno 
    public function select ($rawQuery, $params = array()) : array{
        $stmt = $this->query($rawQuery, $params);
        //fetchAll()	Retorna um array com todos os resultados.
         return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }


}

?>