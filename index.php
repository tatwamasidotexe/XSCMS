<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- including the php code -->
  <?php include "nav.php" ; ?>
  
  <div class="page-container">
    <div class="login-container">
      <h2><b>Login</b></h2>
      <button id="student-button" onclick="studentButtonClick()" style="width:auto;"><b>STUDENT</b></button>
      <button id="vendor-button" onclick="vendorButtonClick()" style="width:auto;"><b>VENDOR</b></button>
    </div>
  </div>

  <div id="student-login" class="modal form-container">
      <form class="modal-content animate" method="post">
          <div class="close-button-container">
          <span onclick="closeButtonClick()" class="close" title="Close Modal">&times;</span>
          </div>
          <h2>Hey there!</h2>
          <div class="fields-container">
          <div class="field-container">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
          </div>

          <div class="field-container">
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          </div>
              
          <button type="submit">Login</button>
          </div>
      </form>
  </div>

  <div id="vendor-login" class="modal form-container">
    <form class="modal-content animate" method="post">
      <div class="close-button-container">
        <span onclick="closeButtonClick()" class="close" title="Close Modal">&times;</span>
      </div>
      <h2>Hey there!</h2>
      <div class="fields-container">
        <div class="username-container">
        <label class="username-label" for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        </div>

        <div class="password-container">
        <label class="password-label" for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
          
        <button type="submit">Login</button>
      </div>
    </form>
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