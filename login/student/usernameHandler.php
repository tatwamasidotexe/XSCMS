<?php
    session_start();
    require_once "../../configdb.php";
    
    // echo 
    //         "<script>
    //             console.log('email: ".$emailid."');
    //         </script>";
    // if session is set
    if(isset($_SESSION["emailid"])) {
        $emailid = $_SESSION["emailid"];
        $sql = "select sname from studentinfo where emailid = '".$emailid."';";
        $result = $connection->query($sql);
        echo "<script>console.log('queried the sql and got result');</script>";
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $sname = $row["sname"];
            echo "<script>console.log('".$sname."');</script>";
            echo "<script>
                document.getElementById('userName').textContent = '".$sname."!';
            </script>";
            // echo 
            // "<script>
            //     document.getElementById('username').textContent = ".$sname.";
            //     console.log('successfully updated username');
            // </script>";
        }
        else {
            echo "<script>
                console.log('query yielded no resulting rows.');
            </script>";
        }
    }
    else {
        echo "<script>console.log('Session not initialized. User not logged in.'); </script>";
    }
?>