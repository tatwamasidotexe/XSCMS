<?php
    
    // TO DO
    // make sure going back/refreshing page also resets session variables after showing a warning
    session_start();
    
    // Unset all of the session variables
    $_SESSION = array();
    $_SESSION["loggedin"] = FALSE;
    session_destroy();

    header("location: ../../");
    exit;
?>