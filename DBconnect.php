<?php
define('DB_PREFIX', 'mp_');
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_HOST_USERNAME', 'root');
define('DB_HOST_PASSWORD', '');//enter password
define('DB_DATABASE', '.......');// database name
define('SITE_NAME', '...');//your site name
try {
    $DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_HOST_USERNAME, DB_HOST_PASSWORD, $dboptions);
    
    
} catch (Exception $ex) {
    echo errorMessage($ex->getMessage());// this in production
    header("refresh: 5; url=error.php");// this in build
    die;
}



?>