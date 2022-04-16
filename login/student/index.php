<!DOCTYPE html>
<html>
<head>
<title>Student Genral</title>
<link rel="stylesheet" href="StdGen.css">
</head>

<!-- STUDENT DATABASE will have
1. email
2. password
3. number of breakfasts paid for
4. number of breakfast already consumed for the month -->

<body>
    <!-- Animated navigation bar -->
    <nav class="navMenu">
      <a href="#home">Home</a>
      <a href="#mealBook">Meal Booking</a>
      <a href="#">Market</a>
      <a href="#help">Help</a>
      <a href="#help">Log Out</a>
      <div class="animation start-home"></div>
    </nav>
    
    <!-- No of days remaining dial -->
    <div class="countdown" id="home">
      <div class="cntdwn">
      <form>
            <label for="total">How many breakfasts did you pay for this month?</label>
            <input class = "cntdwnForm" type="text" id="total">
            <label for="consumed">How many breakfasts have you consumed this month?</label>
            <input class = "cntdwnForm" type="text" id="consumed">
            <input type="submit" value="SUBMIT"/>
          </form>
      </div>
    </div>

    <!-- Meal booking -->
    <div class="mealBook" id="mealBook">

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
       <input type="submit" value="SUBMIT"/>
     </form>
     </div>
   </div>

    <!-- Footer -->
    <div class="footer">
      <p>Project By <br><a class="link" href="#"> Gayatri Rout </a>, <a class="link" href="#"> Manyapu Shreya </a>, <a class="link" href="#"> Tatwamasi Mishra </a>, <a class="link" href="#"> Yashica Pradhan </a></p>
   </div>

</body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="contactForm.js"></script>
<script type="text/javascript" src="Accordion.js"></script> 
<script type="text/javascript" src="Navbar.js"></script>
</html> 
