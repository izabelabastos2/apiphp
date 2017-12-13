<?php
    class db{
        
        // Properties
        private $dbhost = '127.0.0.1';
        private $dbuser = 'izabelabastos2';
        private $dbpass = '';
        private $dbname = 'php-api';
        
        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }   