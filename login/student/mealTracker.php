
<?php
/* 

THIS SCRIPT CALCULATES AND DISPLAYS THE NUMBER OF 
BREAKFAST MEALS REMAINING IN THE ONGOING MONTH 

2 inputs are taken from the form: 
    1. total no. of breakfasts paid for this month,
    2. no. of breakfasts already consumed in this month

then (1) - (2) gives the no. of paid breakfasts remaining for consumption.
*/
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $total = test_input($_POST["total"]);
        $consumed = test_input($_POST["consumed"]);
        $validate = TRUE;
        
        // -------------------- VALIDATING INPUTS -------------------------
        if(intval($total) <= 0) {
            $validate = FALSE;
            echo 
                    '<script>
                        alert("Please pay for 30 or 15 days.");
                    </script>'
                ;
        }
        if(intval($consumed) < 0) {
            $validate = FALSE;
            echo 
                    '<script>
                        alert("Enter 0 if no breakfasts consumed this month.");
                    </script>'
                ;
        }

        // ---------- DISPLAYINGGG ---------------------------------------------------------
        if($validate) {
            $display = $total - $consumed;
            echo "
                <script>
                    document.getElementbyClass('displayCnt').textContent = '".$display."';
                    document.querySelector('#triggerBtn').display = 'none';
                    document.querySelector('#dialContain').display = 'block';
                </script>
            ";
        }

    }
?>