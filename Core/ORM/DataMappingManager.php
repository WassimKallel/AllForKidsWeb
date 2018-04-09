<?php

namespace Core\ORM;
use \Exception;
use \mysqli;

/**
 * Setup's a connection to the database
 *
 */
class DataMappingManager
{
    public static $connection;

    /**
     * Initializes the Model using a given connection or a created one
     *
     * @access public
     * @static
     * @param mysqli $conn MySQLi connection instance.
     * @return void
     */
    public static function initializeMapper($conn = null)
    {
        echo "init";
        if($conn == null) {
            // Connect to the database using mysqli
            $conn = new mysqli($GLOBALS["tachyon_config"]["mysql_hostname"], $GLOBALS["tachyon_config"]["mysql_username"], $GLOBALS["tachyon_config"]["mysql_password"], $GLOBALS["tachyon_config"]["mysql_database"]);
            if( $conn->connect_error )
                throw new Exception("MySQL connection could not be established: ".$conn->connect_error);
        }
        self::$connection = $conn;

        Model::useConnection($conn, $GLOBALS["tachyon_config"]["mysql_database"]);

    }
    
}