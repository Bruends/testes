<?php 

require_once __DIR__ . "/../../config.php";

class ConnectDB
{
    protected $pdo;

    public function __construct(){
        // constatantes para conexão no config.php
        $this->pdo = new pdo("mysql:dbname=" . DB_NAME .";host=" . DB_HOST . ";charset=utf8", DB_USER, DB_PASS);

        $this->setTable();
    }

    //cria tablela no BD caso ela não exista
    public function setTable(){        
        $query  = "CREATE TABLE IF NOT EXISTS `livros` (";
        $query .= "    `cod` int(8) NOT NULL AUTO_INCREMENT,";
        $query .= "    `titulo` varchar(150) NOT NULL,";
        $query .= "    `autor` varchar(150) NOT NULL,";
        $query .= "    PRIMARY KEY (`cod`)";
        $query .= ") ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;";

        $this->pdo->query($query);
    }
}
