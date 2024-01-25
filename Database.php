<?php
class Database
{
    public $connection;

    public function __construct($configure, $user = 'root', $password = "")
    {

        $dsn = 'mysql:' . http_build_query($configure, ' ', ';');
        $this->connection = new PDO($dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query($QueryValue)
    {

        $preparedStatement = $this->connection->prepare($QueryValue);

        $preparedStatement->execute();

        return $preparedStatement;


    }
}
;