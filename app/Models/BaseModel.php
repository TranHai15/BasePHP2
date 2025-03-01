<?php

namespace App\Models;

use Doctrine\DBAL\DriverManager;

class BaseModel
{
    protected $connection;
    protected $table;
    protected $primaryKey = 'id';

    public function __construct()
    {
        $connectionParams = [
            'dbname'    => DB_NAME,
            'user'      => DB_USERNAME,
            'password'  => DB_PASSWORD,
            'host'      => DB_HOST,
            'driver'    => DB_DRIVER,
        ];
        $this->connection = DriverManager::getConnection(params: $connectionParams);
    }

    public function __destruct()
    {
        $this->connection->close();
    }
}
