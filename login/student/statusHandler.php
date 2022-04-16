<?php
    session_start();
    require_once "../../configdb.php";
    // i need a way to get the name of the js function that was called
    $name_of_js_function = "";
    $sql = "select status from vendorinfo where phone_num = '".$name_of_js_function."';";
    $status = $connection->query($sql);
    if($status == "1") {
        echo "<script>
            document.querySelector('.".$name_of_js_function."').textContent = 'Open now';
        </script>";
    }
    else {
        echo "<script>
            document.querySelector('.".$name_of_js_function."').textContent = 'Closed now';
        </script>";
    }
    $connection->close();
?>