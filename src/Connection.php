<?php

namespace semsty\pgbouncer;

use yii\db\Connection as BaseConnection;

class Connection extends BaseConnection
{
    /**
     * https://pgbouncer.github.io/faq.html#how-to-use-prepared-statements-with-transaction-pooling
     * @var bool
     */
    public $emulatePrepare = true;

    public $schemaMap = [
        'pgsql' => Schema::class, // PostgreSQL with pgbouncer
        'mysqli' => 'yii\db\mysql\Schema', // MySQL
        'mysql' => 'yii\db\mysql\Schema', // MySQL
        'sqlite' => 'yii\db\sqlite\Schema', // sqlite 3
        'sqlite2' => 'yii\db\sqlite\Schema', // sqlite 2
        'sqlsrv' => 'yii\db\mssql\Schema', // newer MSSQL driver on MS Windows hosts
        'oci' => 'yii\db\oci\Schema', // Oracle driver
        'mssql' => 'yii\db\mssql\Schema', // older MSSQL driver on MS Windows hosts
        'dblib' => 'yii\db\mssql\Schema', // dblib drivers on GNU/Linux (and maybe other OSes) hosts
        'cubrid' => 'yii\db\cubrid\Schema', // CUBRID
    ];

}