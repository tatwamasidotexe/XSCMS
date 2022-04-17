<?php
    session_start();
    
    // Unset all of the session variables
    $_SESSION = array();

    // session var reset func
    session_destroy();

    header("location: ../../");
    exit;
?>