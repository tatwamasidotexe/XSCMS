<?php
    // session_start();
    require_once "../../configdb.php";
    
    // if session is set
    if(isset($_SESSION["phone"])) {
        $phone = $_SESSION["phone"];
        $sql = "select sname from vendorinfo where phone_num = '".$phone."';";
        $result = $connection->query($sql);
        echo "<script>console.log('queried the sql and got result');</script>";
        // if($result->num_rows > 0) {
        //     $row = $result->fetch_assoc();
        //     $vname = $row["phone_num"];
        //     echo "<script>console.log('".$vname."');</script>";
        //     // echo "<script>
        //     //     document.getElementById('vendorName').textContent = '".$vname."!';
        //     // </script>";
        // }
        // else {
        //     echo "<script>
        //         console.log('query yielded no resulting rows.');
        //     </script>";
        // }
    }
    else {
        echo "<script>console.log('Session not initialized. User not logged in.'); </script>";
    }
?>