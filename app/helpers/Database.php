<?php

namespace App\Helpers;

use \PDO;
use Exception;
use PDOException;

/**
 * Database helper
 */
class Database
{
    /**
     * Private variable to store the connection
     * @var Object
     */
    private $connection;

    /**
     * Constructor for the database function
     * @param Array $settings List of settings
     */
    public function __construct($settings)
    {
        try {
            $pdo = new PDO("mysql:host=" . $settings['host'] . ";dbname=" . $settings['dbname'], $settings['user'], $settings['pass']);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $this->connection = $pdo;
        } catch (PDOException $e) {
            throw new Exception('Connection failed: ' . $e->getMessage());
        }
    }

    /**
     * Wrapper to query the Database
     * @param  String $sql    SQL command
     * @param  Array  $params Parameters for the command
     * @return Object         The output of the command
     */
    public function query($sql, $params)
    {
        try {
            $query = $this->connection->prepare($sql);
            $query->execute($params);

            return $query;
        } catch (PDOException $e) {
            throw new Exception('Query failed: ' . $e->getMessage());
        }
    }

    /**
     * Get the last insert id from the SQL Server
     * @return Integer  The last insert id
     */
    public function lastInsertId()
    {
        return $this->connection->lastInsertId();
    }

    /**
     * Date format helper
     * @param  string $format The format
     * @return string         The date formatted as requested
     */
    public function getDate($format="Y-m-d H:i:s")
    {
        return date($format);
    }
}