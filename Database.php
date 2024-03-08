<?php

class Database {

    private $connection;

    private $host = "localhost";
    private $port = "3306";

    public function __construct($config) {



        $connection_string = "mysql:" . http_build_query($config, "", ";");
        $this->connection = new PDO($connection_string);
    }

    public function execute($query_string) {
        
        $query = $this->connection->prepare($query_string);
        
        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_ASSOC);
        
}
}