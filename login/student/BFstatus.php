<?php
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