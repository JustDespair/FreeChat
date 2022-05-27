<?php

class Conection extends \PDO {

    private $tipeDB = 'mysql';
    private $host = '127.0.0.1';
    private $nameDB = 'freechat_bd';
    private $user = 'root';
    private $password = '';
    private $link;

    public function __construct() {
        
        try{
            $this->link = parent::__construct("{$this->tipeDB}:namebd={$this->nameDB};host={$this->host};charset=utf8", $this->user, $this->password);
        }catch(PDOException $x){
            echo "Conexion fallida, error: " . $x->getMessage();
            exit;
        }
    }
    public function makequerys($query, $select = false)
    {
        $conection = mysqli_connect($this->host, $this->user, $this->password, $this->nameDB);
        $result = mysqli_query($conection, $query);
        if(true == $select){
            while($row = mysqli_fetch_assoc($result)) {
               $response[] = $row;
           }
           return $response;
         }
    }
}
