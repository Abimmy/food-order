<?php 
    // Include constants.php to access SITEURL.
    include('../config/constants.php');

    // 1. Destroy the current session and unset the 'user' variable.
    session_destroy(); 

    // 2. Redirect the user to the login page using SITEURL.
    header('location:'.SITEURL.'/');
?>