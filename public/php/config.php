<?php if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Database user / pass
 */
$sql_details = array(
	"type" => "Postgres",  // Database type: "Mysql", "Postgres", "Sqlserver", "Sqlite" or "Oracle"
	"user" => "ptawkqcgrjrzit",       // Database user name
	"pass" => getenv('DB_PWD'),       // Database password
	"host" => "ec2-54-235-181-120.compute-1.amazonaws.com",       // Database host
	"port" => "5432",       // Database connection port (can be left empty for default)
	"db"   => "d83ene7l1pqeae"      // Database name
);


