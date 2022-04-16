<?php
    $database = 'awd project database';
    $server = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $connection = new mysqli($server, $db_username, $db_password, $database);
    if($connection -> connect_error) {
        die("Connection failed: " . $connection -> connect_error);
    }
?>