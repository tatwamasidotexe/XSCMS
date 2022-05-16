<?php
    // session_start();
    require_once "../../configdb.php";
    
    // if session is set
    if(isset($_SESSION["phone"])) {
        
        $phone = $_SESSION["phone"];
        
        // ------------------ querying to the database ----------------------
        $sql = "SELECT name FROM vendorinfo WHERE PHONE_NUM LIKE '{$phone}'";
        $result = $connection->query($sql);

        // displaying the vendor name
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $vname = $row["name"];
            echo "<script>
                document.getElementById('vendorName').style.textTransform = 'capitalize';
                document.getElementById('vendorName').textContent = '$vname';
            </script>";
        } else {
            echo "<script>console.log('Vendor not found in the database.'); </script>";
        }
    }
    else {
        echo "<script>console.log('Session not initialized. User not logged in.'); </script>";
    }
?>