<!-- NOTES -->
<!-- 1. HOW TO HIDE/ENCRYPT THE URL THINGY BRO -->
<!-- 2. VALIDATE PASSWORD BRO ho gaya bro chup raho -->
<!-- 3. LOGOUT PROCESS -->


<?php
    session_start();
    require_once "configdb.php";

    
    // the login process will start
    // 1. take input posted from form
    // 2. get email/phone and pw from the respective table in the db
    // 3. validate email/phone and pw 
    // 4. if validation is successful, send email/phone via url to redirect 
    // user to corresponding ui ----> this isnt done yet
    // 5. if failed, raise an alert to say email/phone or pw was incorrect, 
    // or user was not found on the db
    // DONE? 

    // data pre-processing function
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // if VENDOR
        if($_POST["phonenum"]){
            
            $phone = test_input($_POST["phonenum"]);
            $pw = test_input($_POST["psw"]);
            
            // variable to make sure that all fields have valid input
            $validate = TRUE;

            // validating phone number and password
            if(!preg_match("/^[0-9]{10}+$/", $phone)) {
                $validate = FALSE;
                echo 
                    '<script>
                        alert("Enter a valid 10 digit phone number.");
                    </script>'
                ;
            } 
            else {
                // check if phone number and pw are in the database
                $sql = "select * from vendorinfo where phone_num = '".$phone."' and password = '".$pw."' ;";
                $result = $connection->query($sql);

                if(!$row = $result->fetch_assoc()) {
                    // !(phonenum and pw exist in the db and match w each other)
                    $validate = FALSE;
                    echo "<script>alert('Incorrect phone number or password. Try again.')</script>";
                }
                elseif($validate) {
                    session_start();
                    $_SESSION["loggedin"] = TRUE;
                    $_SESSION["phone"] = $phone;
                    header("location: login/vendor");
                }
            }

            
        }

        // if STUDENT
        if($_POST["email"]){
            
            $email = test_input($_POST["email"]);
            $pw = test_input($_POST["pw"]);

            // variables to make sure that all fields have valid input
            $validate = TRUE;

            // validating email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $validate = FALSE;
                echo 
                    '<script>
                        document.querySelector("#emailid").textContent = "Invalid email format.";
                    </script>'
                ;
            } 
            else {
                // check if email and pw are in the database
                $sql = "select * from `studentinfo` where emailid = '".$email."' and password = '".$pw."' ;";
                $result = $connection->query($sql);

                if(!$row = $result->fetch_assoc()) {
                    $validate = FALSE;
                    // !(email and pw exist in the db and match w each other)
                    echo "<script>alert('Incorrect email or password. Try again.')</script>";
                }
                elseif($validate) {
                    session_start();
                    $_SESSION["loggedin"] = TRUE;
                    $_SESSION["emailid"] = $email;
                    header("location: login/student");
                }

            }

            
        }
    }
        
    
    // else connected successfully

    // close connection bro
    $connection->close(); 
    
?>