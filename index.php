<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- including the php code -->
  <?php include "login.php" ; ?>
  
  <div class="page-container">     
    <div class="login-container">
      <h3 style="text-align: center; font-size:1.5vw;">XIM Student Convenience Management System</h3>
      <h2><b>Login</b></h2>
      <button id="student-button" onclick="studentButtonClick()" style="width:auto;"><b>STUDENT</b></button>
      <button id="vendor-button" onclick="vendorButtonClick()" style="width:auto;"><b>VENDOR</b></button>
    </div>
  </div>

  <!-- STUDENT LOGIN FORM -->
  <div id="student-login" class="modal form-container">
      <form class="modal-content animate" method="post">
          <div class="close-button-container">
            <span onclick="closeButtonClick()" class="close" title="Close Modal">&times;</span>
          </div>
          <h2>Student Login Form</h2>
          <div class="fields-container">
          <div class="field-container">
              <label for="email"><b>University email ID </b><span id="emailid" style="color: red;"></span></label>
              <input type="text" placeholder="Enter university email" name="email" required>
          </div>

          <div class="field-container">
              <label for="pw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pw" required>
          </div>
              
          <button type="submit" name="submit">Login</button>
          </div>
      </form>
  </div>

  <!-- VENDOR LOGIN FORM -->
  <div id="vendor-login" class="modal form-container">
    <form class="modal-content animate" enctype="multipart/form-data" method='POST'>
      <div class="close-button-container">
        <span onclick="closeButtonClick()" class="close" title="Close Modal">&times;</span>
      </div>
      <h2>Vendor Login Form</h2>
      <div class="fields-container">
        <div class="username-container">
        <label class="phonenum-label" for="phonenum"><b>Phone number </b><span id="phone" style="color: red;"></span></label>
        <input type="tel" placeholder="Enter phone number" name="phonenum" required>
        </div>

        <div class="password-container">
        <label class="password-label" for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
          
        <button type="submit" name="submit">Login</button>
      </div>
    </form>
  </div>

  <!-- Footer -->
  <div class="footer">
            <p>&#169 2022 Project By <br>
                <a class="link" target="_blank" href="https://github.com/Gtree123/AWD-Project"> Gayatri Rout </a>,
                <a class="link" target="_blank" href="https://github.com/ManyapuShreya/projecctt/"> Manyapu Shreya </a>
                <a class="link" target="_blank" href="https://github.com/tatwamasidotexe/XSCMS"> Tatwamasi Mishra </a>,
                <a class="link" target="_blank" href="https://github.com/Yashikoi/AWD-project"> Yashica Pradhan </a>
            </p>
        </div>

  <script>
  // Get the modal
  var studentModal = document.getElementById('student-login');
  var vendorModal = document.getElementById('vendor-login');


  const closeButtonClick = () => {
    studentModal.style.display = "none";
    vendorModal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == studentModal || event.target == vendorModal) {
        studentModal.style.display = "none";
        vendorModal.style.display = "none";
      }
  }

  const studentButtonClick = (buttonId) => {
    studentModal.style.display='grid';
  }

  const vendorButtonClick = (buttonId) => {
    vendorModal.style.display='grid';
  }

  </script>

</body>
</html>