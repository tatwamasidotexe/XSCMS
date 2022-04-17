<?php
    session_start();
    require_once "../../configdb.php";
    // find a way to get all the usernames from venderinfo table and form the query
    // $mess = "select status from vendorinfo where name = 'mess'";
    // $basant = "select status from vendorinfo where name = 'basant'";
    // $aditya = "select status from vendorinfo where name = 'aditya'";
    // $cs = "select status from vendorinfo where name = 'cs'";

    $vendors = array("mess", "basant", "aditya", "cs");
    $queries = array();

    foreach($vendors as $vendor) {
        array_push($queries, "select status from vendorinfo where name = '".$vendor."';");
    }
    $count = 0;
    foreach ($queries as $query) {
        $status = $connection->query($query);
        if($status == "1") {
            echo "<script>
                document.getElementById('".$vendors[$count]."').textContent = 'Open now';
            </script>";
        }
        else {
            echo "<script>
                document.getElementById('".$vendors[$count]."').textContent = 'Closed now';
            </script>";
        }
        ++$count;
    }

    
    $connection->close();
?>