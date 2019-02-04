<?php
/**
 * Created by PhpStorm.
 * User: Veselin
 * Date: 24.10.2018 г.
 * Time: 23:04
 */

   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'admin');
   define('DB_DATABASE', 'project');

$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

