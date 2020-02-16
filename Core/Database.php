<?php

namespace Core;
use PDO;

class Database
{

    protected $host = "mysql:host=localhost;";
    protected $db ="dbname=PiePHP;" ;
    protected $charset = "charset=utf8";
    protected $login = "root";
    protected $mdp = "root";
    protected $pdo;

    public function __construct(){

        $this->pdo = $this->dbinstanciation();
      }
    
    protected function dbinstanciation(){
    
        return new PDO($this->host . $this->db . $this->charset , $this->login , $this->mdp, array(
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }
     
}
