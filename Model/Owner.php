<?php


namespace Model;


/**
 * Class Owner
 * @package Model
 */
class Owner extends Mysql
{
    /**
     *
     */
    const TABLE_NAME = 'owners';

    /**
     * @return mixed
     */
    public function getOwners()
    {
        $this->dbConnect();
        $data = $this->selectAll(self::TABLE_NAME);
        $this->dbDisconnect();

        return $data;
    }
}