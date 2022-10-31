<?php

namespace App\Database;

use mysqli;
use Exception;

class Database
{
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = 'root';
    const DATABASE = 'login_project';
    const PORT = 3306;

    protected $connection;

    /**
     * Sets the connection credentials to connect to your database.
     *
     * @param string $host - the host of your database
     * @param string $username - the username of your database
     * @param string $password - the password of your database
     * @param string $database - your database name
     * @param integer $port - the port of your database
     * @param boolean $autoconnect - to auto connect to the database after settings connection credentials
     */
    public function __construct($host = self::HOST, $username = self::USERNAME, $password = self::PASSWORD, $database = self::DATABASE, $port = self::PORT, $autoconnect = true)
    {
        $this->host = $host;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;
        if ($autoconnect) $this->open();
    }
    /**
     * Open the connection to your database.
     */
    public function open()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);
    }
    /**
     * Close the connection to your database.
     */
    public function close()
    {
        $this->connection->close();
    }
    /**
     *
     * Execute your query
     *
     * @param string $query - your sql query
     * @return the result of the executed query 
     */
    public function query($query)
    {
        try {
            $elements = [];
            if (isset($query)) {
                $queryResult = $this->connection->query($query);
            }
            while ($row = $queryResult->fetch_assoc()) {
                $elements[] = $row;
            }
            print_r($elements);
            if (sizeof($elements) < 1) {
                throw new Exception("Nessun risultato");
            }
        } catch (Exception $e) {
            $message = $e->getMessage();
            var_dump($message);
            echo $message;
        }
        return $elements;
    }
    /**
     * Escape your parameters to prevent SQL Injections! Usage: See documentation (link at the top of the file)
     *
     * @param string $string - your parameter to escape
     * @return the escaped string 
     */
    public function escape($string)
    {
        return $this->connection->escape_string($string);
    }
}
