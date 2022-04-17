<?php
    require_once "../../configdb.php";
    // find a way to get all the usernames from venderinfo table and form the query
    // $mess = "select status from vendorinfo where name = 'mess'";
    // $basant = "select status from vendorinfo where name = 'basant'";
    // $aditya = "select status from vendorinfo where name = 'aditya'";
    // $cs = "select status from vendorinfo where name = 'cs'";

    $vendors = array("mess", "basant", "aditya", "convenienceStore");
    $queries = array();

    foreach($vendors as $vendor) {
        array_push($queries, "select status from vendorinfo where name = '".$vendor."';");
    }
    $count = 0;
    foreach ($queries as $query) {
        $result = $connection->query($query);
        if($result->num_rows > 0) {            
            $row = $result->fetch_assoc();            
            if($row["status"]) {
                echo "<script>
                    document.getElementById('".$vendors[$count]."').innerText = 'Open now';
                </script>";
            }
            else {
                echo "<script>
                    document.getElementById('".$vendors[$count]."').innerText = 'Closed now';
                </script>";
            }
        }
        else {
            echo "<script>console.log('Could not find a row with name = ".$vendor."'</script>)";
        }
        ++$count;
    }

    
    $connection->close();
?>