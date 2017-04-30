<?php if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Database user / pass
 */
$sql_details = array(
	"type" => getenv('DB_Type'),  // Database type: "Mysql", "Postgres", "Sqlserver", "Sqlite" or "Oracle"
	"user" => getenv('DB_UID'),       // Database user name
	"pass" => getenv('DB_PWD'),       // Database password
	"host" => getenv('DB_HOST'),       // Database host
	"port" => getenv('DB_PORT'),       // Database connection port (can be left empty for default)
	"db"   => getenv('DB_DB_NAME')      // Database name
);


