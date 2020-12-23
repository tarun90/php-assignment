<?php

namespace Model;

use Inc\MsqlAbstract;

/**
 * Class Mysql
 * @package Model
 */
class Mysql extends MsqlAbstract
{

    /**
     * Mysql constructor.
     */
    public function __construct()
    {
        $this->connectionString = NULL;
        $this->sqlQuery = NULL;
        $this->dataSet = NULL;

        $this->hostName = DB_HOST;
        $this->userName = DB_USERNAME;
        $this->password = DB_PASSWORD;
        $this->databaseName = DB_NAME;
        $dbPara = NULL;
    }

    /**
     * @return false|\mysqli|null
     */
    function dbConnect()
    {
        $this->connectionString = mysqli_connect(
            $this->hostName,
            $this->userName,
            $this->password,
            $this->databaseName
        );

        if ($this->connectionString->connect_error) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        return $this->connectionString;
    }

    /**
     *
     */
    function dbDisconnect()
    {
        $this->connectionString = NULL;
        $this->sqlQuery = NULL;
        $this->dataSet = NULL;
        $this->databaseName = NULL;
        $this->hostName = NULL;
        $this->userName = NULL;
        $this->password = NULL;
    }

    /**
     * @param $tableName
     * @return null
     */
    function selectAll($tableName)
    {
        $this->sqlQuery = 'SELECT * FROM ' . $this->databaseName . '.' . $tableName;

        $this->dataSet = $this->connectionString->query($this->sqlQuery);

        return $this->dataSet;
    }
}