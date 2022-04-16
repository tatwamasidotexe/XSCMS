<!DOCTYPE html>
<html>

<head>
  <title>Student Genral</title>
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
      <p>Hey <a>Gayatri Rout!</a></p>
    </div>
    <div class="cntdwn">
      <form>
        <label for="total">How many breakfasts did you pay for this month?</label>
        <input class="cntdwnForm" type="text" id="total">
        <label for="consumed">How many breakfasts have you consumed this month?</label>
        <input class="cntdwnForm" type="text" id="consumed">
        <input type="submit" value="SUBMIT" />
      </form>
    </div>
  </div>
  <!-- Meal booking -->
  <div class="mealBook" id="mealBook">
    <div class="container">
      <p class="para">Book your meal with ease!</p>
      <p><button class="btn" id="myDIV" onclick="myFunction()">Book Brekkie</button></p>
    </div>
  </div>
  
  <!-- Market -->
  
  <?php include "statusHandler.php"; ?> 

  <div class="market" id="market">
    <div class="marketContain">
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'tab 1')">Mess</button>
        <button class="tablinks" onclick="openCity(event, 'tab 2')">Basant</button>
        <button class="tablinks" onclick="openCity(event, 'Tab 3')">Aditya</button>
        <button class="tablinks" onclick="openCity(event, 'Tab 4')">Convenience Store</button>
      </div>
      <div id="tab 1" class="tabcontent">
        <div class="row">
          <div class="column one">
            <p><button id="status" class="btn2 mess" onclick="mess()">Open Now</button></p>
            <p><button class="myBtn_multi">See Menu</button></p>
            <div class="modal modal_multi">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close close_multi">&times;</span>
                <img src="mess menu.jpeg">
                <br>
                <img src="mess menu.jpeg">
              </div>
            </div>
          </div>
          <div class="column two">
            <h2>Scheduled Timings</h2>
            <p><b>Breakfast: </b>8am - 9:45am</p>
            <p><b>Lunch: </b>12:30pm - 2:30pm</p>
            <p><b>Dinner: </b>5pm - 8pm</p>
          </div>
        </div>
      </div>
      <div id="tab 2" class="tabcontent">
        <div class="row">
          <div class="column one">
            <p><button id="status" class="btn2 basant" onclick="basant()">Open Now</button></p>
            <p><button class="myBtn_multi" >See Menu</button></p>
            <div class="modal modal_multi">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close close_multi">&times;</span>
                <img src="basant menu.jpeg">
              </div>
            </div>
          </div>
          <div class="column two">
            <h2>Scheduled Timings</h2>
            <p><b>Breakfast: </b>8am - 9:45am</p>
            <p><b>Lunch: </b>12:30pm - 2:30pm</p>
            <p><b>Dinner: </b>5pm - 8pm</p>
          </div>
        </div>
      </div>
      <div id="Tab 3" class="tabcontent">
      <div class="row">
          <div class="column one">
            <p><button id="status" class="btn2 aditya" onclick="aditya()">Open Now</button></p>
            <p><button class="myBtn_multi">See Menu</button></p>
            <div class="modal modal_multi">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close close_multi">&times;</span>
                <img src="Aditya menu.jpeg">
                <br>
                <img src="Aditya menu 2.jpeg">
              </div>
            </div>
          </div>
          <div class="column two">
            <h2>Scheduled Timings</h2>
            <p><b>Breakfast: </b>8am - 9:45am</p>
            <p><b>Lunch: </b>12:30pm - 2:30pm</p>
            <p><b>Dinner: </b>5pm - 8pm</p>
          </div>
        </div>
      </div>
      <div id="Tab 4" class="tabcontent">
      <div class="row">
          <div class="column one">
            <p><button id="status" class="btn2 cs" onclick="cs()">Open Now</button></p>
            <p><button class="myBtn_multi">See Menu</button></p>
            <div class="modal modal_multi">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close close_multi">&times;</span>
                <img src="mess menu.jpeg">
                <br>
                <img src="mess menu.jpeg">
              </div>
            </div>
          </div>
          <div class="column two">
            <h2>Scheduled Timings</h2>
            <p><b>Breakfast: </b>8am - 9:45am</p>
            <p><b>Lunch: </b>12:30pm - 2:30pm</p>
            <p><b>Dinner: </b>5pm - 8pm</p>
          </div>
        </div>
      </div>
    </div>
  </div>
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
    <p>Project By <br><a class="link" href="#"> Gayatri Rout </a>, <a class="link" href="#"> Manyapu Shreya </a>, <a class="link" href="#"> Tatwamasi Mishra </a>, <a class="link" href="#"> Yashica Pradhan </a></p>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../../scripts/contactForm.js"></script>
<script type="text/javascript" src="../../scripts/Accordion.js"></script>
<script type="text/javascript" src="../../scripts/Navbar.js"></script>
<script type="text/javascript" src="../../scripts/BookBtn.js"></script>
<script type="text/javascript" src="../../scripts/Tabs.js"></script>
<script type="text/javascript" src="../../scripts/PopUpMenu.js"></script>
<script type="text/javascript" src="statusDisplay.js"></script>
</html>