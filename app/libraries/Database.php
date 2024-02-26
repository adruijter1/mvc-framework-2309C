<?php

class Database
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;
    private $dbHandler;
    private $errorMessage;
    private $statement;

    public function __construct()
    {
        /**
         * Maak de connectiestring voor de PDO constructor
         */
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        );

        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->$errorMessage = $e->getMessage();
        }
    }

    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }
}