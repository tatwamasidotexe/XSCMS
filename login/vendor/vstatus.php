<?php
    session_start();
    require_once "../../configdb.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["open"]) {
            $status = $_POST["open"];
            $sql = "update `vendorinfo` set `status`= 1";
            if ($connection->query($sql)) {
                echo "<script>success.</script>";
            } 
            else {
                echo "<script>error.</script>";
            }
        }
        
    }

?>