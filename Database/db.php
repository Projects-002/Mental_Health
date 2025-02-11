<?php

Use Dotenv\Dotenv;// Import Dotenv classes into the global namespace
include '../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$db_server = "localhost";
$db_user = "root";
$db_pass = $_ENV['DATABASE_PASS'];
$db_name = $_ENV['DATABASE_NAME'];
$conn = "";

try{
    $conn = mysqli_connect( $db_server,$db_user,$db_pass,$db_name);
}catch(mysqli_sql_exception){
    echo"Could not connect to the database";
}


?>

