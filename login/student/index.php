<!DOCTYPE html>
<html>

<head>
  <title>XSCMS: Student</title>
  <link rel="stylesheet" href="StdGen.css">
</head>
<body>
  <!-- Animated navigation bar -->
  <nav class="navMenu">
    <a href="#home">Home</a>
    <a href="#mealBook">Meal Booking</a>
    <a href="#market">Market</a>
    <a href="#help">Help</a>
    <a href="logout.php">Log Out</a>
    <div class="animation start-home"></div>
  </nav>
  
  <!-- No of days remaining dial -->
  <div class="countdown" id="home">
    <div class="username">
      <p>Hey <span id="userName"></span></p>
      <p><b>Welcome to Student XSCS</b></p>
    </div>    
    <?php include "usernameHandler.php"; ?> 

    <!--------------------------------- MEAL TRACKER -------------------------------------------------->
    <!-- MEAL TRACKER DIAL -->
    <div id="dialContain" class="dialContainer">
      <div class="dial">
        <div class="dialText">
          <div class="cntDisplay">
            <p id="displayCount" class="displayCnt">15</p>
          </div>
          <div class="daysLeft">
            <p>Days Left</p>
          </div>
          <p class="brekkie">Breakfast Count</p>
        </div>
      </div>
    </div>

    <!-- FORM FOR MEAL SPECIFICS -->
    <div id="triggerBtn" class="cntdwn">
      <form method="post">
        <label for="total">How many breakfasts did you pay for this month?</label>
        <input class="cntdwnForm" type="text" name="total" id="total" required>
        <label for="consumed">How many breakfasts have you consumed this month?</label>
        <input class="cntdwnForm" required type="text" id="consumed" name="consumed">
        <input onclick="toggleFunction()" type="submit" value="SUBMIT" />
      </form>
    </div>

  </div>
  <!-- INCLUDING MEAL TRACKER SCRIPT -->
  <?php include "mealTracker.php"; ?>

<!-- ----------------------------------------------------------------------------------------------- -->
  <!-- Meal booking -->
  <div class="mealBook" id="mealBook">
    <div class="container">
      <p class="para">Book your meal with ease!</p>
      <p><button class="btn" id="myDIV" onclick="myFunction()">Book Brekkie</button></p>
    </div>
  </div>
  
  <!-- Market -->
  <div class="market" id="market">
    <div class="marketContain">
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'tab 1')">Mess</button>
        <button class="tablinks" onclick="openCity(event, 'tab 2')">Basant</button>
        <button class="tablinks" onclick="openCity(event, 'Tab 3')">Aditya</button>
        <button class="tablinks" onclick="openCity(event, 'Tab 4')">Convenience Store</button>
      </div>

      <!-- Mess Tab -->
      <div id="tab 1" class="tabcontent">
        <div class="row">
          <div class="column one">
          <p><button id="mess" class="btn2">Open Now</button></p>
            <p><button class="myBtn_multi">See Menu</button></p>
            <div class="modal modal_multi">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close close_multi">&times;</span>
                <img src="../../assets/mess menu.jpeg">
                <br>
                <img src="../../assets/mess menu.jpeg">
              </div>

            </div>
          </div>
          <div class="column two">
            <h2>Scheduled Timings</h2>
            <p><b>Breakfast: </b>8am - 9:45am</p>
            <p><b>Lunch: </b>12:30pm - 2:30pm</p>
            <p><b>Dinner: </b>5pm - 8pm</p>
            <br>
            <br>
            <h2>Contact Vendor</h2>
            <p id="messPh">9037836745</p>
          </div>
        </div>
      </div>

      <!-- Basant Tab -->
      <div id="tab 2" class="tabcontent">
        <div class="row">
          <div class="column one">
          <p><button id="basant" class="btn2">Open Now</button></p>
            <p><button class="myBtn_multi">See Menu</button></p>
            <div class="modal modal_multi">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close close_multi">&times;</span>
                <img src="../../assets/basant menu.jpeg">
              </div>

            </div>
          </div>
          <div class="column two">
            <h2>Scheduled Timings</h2>
            <p><b>Opening Time: </b>11am</p>
            <p><b>Closing Time: </b>10pm</p>
            <br>
            <br>
            <h2>Contact Vendor</h2>
            <p id="messPh">9037836745</p>
          </div>
        </div>
      </div>

      <!-- Aditya Tab -->
      <div id="Tab 3" class="tabcontent">
        <div class="row">
          <div class="column one">
          <p><button id="aditya" class="btn2">Open Now</button></p>
            <p><button class="myBtn_multi">See Menu</button></p>
            <div class="modal modal_multi">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close close_multi">&times;</span>
                <img src="../../assets/Aditya menu.jpeg">
                <br>
                <img src="../../assets/Aditya menu 2.jpeg">
              </div>

            </div>
          </div>
          <div class="column two">
            <h2>Scheduled Timings</h2>
            <p><b>Opening Time: </b>10am</p>
            <p><b>Closing Time: </b>10pm</p>
            <br>
            <br>
            <h2>Contact Vendor</h2>
            <p id="messPh">9037836745</p>
          </div>
        </div>
      </div>

      <!-- Convenience Store Tab -->
      <div id="Tab 4" class="tabcontent">
        <div class="row">
          <div class="column one">
            <p><button id="convenienceStore" class="btn2">Open Now</button></p>
            <p><button class="myBtn_multi">See Menu</button></p>
            <div class="modal modal_multi">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close close_multi">&times;</span>
                <img src="../../assets/mess menu.jpeg">
                <br>
                <img src="../../assets/mess menu.jpeg">
              </div>

            </div>
          </div>
          <div class="column two">
            <h2>Scheduled Timings</h2>
            <p><b>Opening Time: </b>12pm</p>
            <p><b>Closing Time: </b>10pm</p>
            <br>
            <br>
            <h2>Contact Vendor</h2>
            <p id="messPh">9037836745</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "statusHandler.php"; ?> 

  <!-- FAQs -->
  <div class="faq" id="help">
    <div class="faqBox">
      <p class="heading">Frequently Asked Questions (FAQS)</p>
      <button class="accordion">Question 1</button>
      <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <button class="accordion">Question 2</button>
      <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <button class="accordion">Question 3</button>
      <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
  <!-- Contact Form -->
  <div class="contactForm">
    <div class="mailbg">
      <form>
        <h3>Need Help? Reach out to us immediately !</h3>
        <input name="name" type="text" class="feedback-input" placeholder="Name" />
        <input name="email" type="text" class="feedback-input" placeholder="Email" />
        <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
        <input type="submit" value="SUBMIT" />
      </form>
    </div>
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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../../scripts/contactForm.js"></script>
<script type="text/javascript" src="../../scripts/Accordion.js"></script>
<script type="text/javascript" src="../../scripts/Navbar.js"></script>
<script type="text/javascript" src="../../scripts/BookBtn.js"></script>
<script type="text/javascript" src="../../scripts/Tabs.js"></script>
<script type="text/javascript" src="../../scripts/PopUpMenu.js"></script>
</html>