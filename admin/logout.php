<?php

define('SITEURL','http://localhost/cosmetic%20website/admin/login.php');
define('LOCALHOST', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cosmetic-website');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db($conn,'cosmetic-website') or die(mysqli_error());


    session_destroy();
    header('location:'.SITEURL,'admin/login.php');


?>
