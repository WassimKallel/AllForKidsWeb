<?php

namespace Core\ORM;
use \Exception;
use \mysqli;

/**
 * Setup's a connection to the database
 *
 */
class DataBaseManager
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
        if($conn == null) {
            // Connect to the database using mysqli
            $conn = new mysqli($GLOBALS["AllForKids"]["mysql_hostname"], $GLOBALS["AllForKids"]["mysql_username"], $GLOBALS["AllForKids"]["mysql_password"], $GLOBALS["AllForKids"]["mysql_database"],"3306");
            if( $conn->connect_error )
                throw new Exception("MySQL connection could not be established: ".$conn->connect_error);
        }
        self::$connection = $conn;

        Model::useConnection($conn, $GLOBALS["AllForKids"]["mysql_database"]);

    }
    
}