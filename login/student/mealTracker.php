
<?php
/* 
THIS SCRIPT CALCULATES AND DISPLAYS THE NUMBER OF 
BREAKFAST MEALS REMAINING IN THE ONGOING MONTH 

2 inputs are taken from the form: 
    1. total no. of breakfasts paid for this month,
    2. no. of breakfasts already consumed in this month

then (1) - (2) gives the no. of paid breakfasts remaining for consumption.
*/
    require_once "../../configdb.php";

    // if session is set
    if(isset($_SESSION["emailid"])) {
        
        $emailid = $_SESSION["emailid"];

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $sql = "SELECT BF_PAID, BF_CONSUMED FROM studentinfo WHERE EMAILID = '$emailid'";
        $result = $connection->query($sql);

        // if the 2 input columns exist in the database
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $total = $row['BF_PAID'];
            $consumed = $row['BF_CONSUMED'];

            // utility function to configure dial display
            function dialDisplay($bf_paid, $bf_consumed) {
                $display = $bf_paid - $bf_consumed;
                echo "<script>console.log('display = $display')</script>";
                echo "
                    <script>
                        document.querySelector('#triggerBtn').style.display = 'none';
                        document.getElementById('displayCount').textContent = '{$display}';
                        console.log('javascript updated');
                    </script>
                ";
            }

            // --------------- CHECK IF INPUT FIELDS ARE NULL IN DB ----------------
            // if both values are null, show form, hide dial
            if($total===null && $consumed===null) {

                // get the inputs from the form
                if($_SERVER["REQUEST_METHOD"] == "POST") {

                    $total = test_input($_POST["total"]);
                    $consumed = test_input($_POST["consumed"]);
                    $validate = TRUE;
                    
                    // -------------------- VALIDATING INPUTS -------------------------
                    if($total <= 0) {
                        $validate = FALSE;
                        echo 
                                '<script>
                                    alert("Please pay for 30 or 15 days.");
                                </script>'
                            ;
                    } else {
                        echo "<script>console.log('total = {$total}, validation succesful.')</script>";
                    }

                    if($consumed < 0) {
                        $validate = FALSE;
                        echo 
                                '<script>
                                    alert("Enter 0 if no breakfasts consumed this month.");
                                </script>'
                            ;
                    } else {
                        echo "<script>console.log('consumed = {$consumed}, validation succesful.')</script>";
                    }

                    // if validation successful
                    if($validate) {
                        
                        // ------------------------------- UPDATE DATABASE -----------------------------------------
                        $sql = "update studentinfo SET BF_PAID = '{$total}', BF_CONSUMED = '{$consumed}' WHERE studentinfo.EMAILID = '$emailid'";
                        if($result = $connection->query($sql)){
                            echo "<script>console.log('Input values updated in database.')</script>";
                        } else {
                            echo "<script>console.log('Input values updation unsuccessful.')</script>";
                        }
                        
                        // ------------------------------- DISPLAY THE DIAL ------------------------------------
                        dialDisplay($total, $consumed);
                    } else {
                        echo "<script>console.log('Validation unsuccessful.');";
                    }

                }
            } else /* we have both inputs already */ {
                // ------------------------------- DISPLAY THE DIAL ------------------------------------
                dialDisplay($total, $consumed);
            }
            
                
        } else {
            echo "
                    <script>
                        console.log('The input variable holder columns do not exist in database?')
                    </script>
                ";
        }
    } else {
        echo "<script>console.log('Session not initialized. User not logged in.'); </script>";
    }
?>