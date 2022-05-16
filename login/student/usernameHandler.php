<?php
    session_start();
    require_once "../../configdb.php";
    
    // if session is set
    if(isset($_SESSION["emailid"])) {
        
        $emailid = $_SESSION["emailid"];
        
        // ------------------ querying to the database ----------------------        
        $sql = "select sname from studentinfo where emailid = '".$emailid."';";
        $result = $connection->query($sql);
        
        // displaying the vendor name
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $sname = $row["sname"];
            echo "<script>
                document.getElementById('userName').textContent = '".$sname."!';
            </script>";
        }
        else {
            echo "<script>
                console.log('Student not found in the database.');
            </script>";
        }
    }
    else {
        echo "<script>console.log('Session not initialized. User not logged in.'); </script>";
    }
?>