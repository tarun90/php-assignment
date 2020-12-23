<?php


namespace Inc;


/**
 * Class MsqlAbstract
 * @package Inc
 */
abstract class MsqlAbstract
{
    /**
     * @var null
     */
    protected $connectionString;
    /**
     * @var null
     */
    protected $dataSet;

    /**
     * @var null
     */
    protected $sqlQuery;

    /**
     * @var string
     */
    protected $hostName;
    /**
     * @var string
     */
    protected $userName;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var string
     */
    protected $databaseName;

    /**
     * @return mixed
     */
    abstract protected function dbConnect();

    /**
     * @return mixed
     */
    abstract protected function dbDisconnect();

    /**
     * @param $tableName
     * @return mixed
     */
    abstract protected function selectAll($tableName);
}