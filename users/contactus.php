<?php
session_start();
if (empty($_SESSION['stud_id'])) {
  echo ("<SCRIPT LANGUAGE='JavaScript'> 
      window.alert('Session End. Please re-login!') 
      window.location.href='../index.php' 
      </SCRIPT>");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UITM LIBRARY</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/templatemo-style.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: sans-serif;

    }

    .banner {
      width: 100%;
      height: 100vh;
      margin-right: 100%;
      background-size: cover;
      background-position: center;
    }

    .navbar {
      width: 95%;
      margin: auto;
      padding: 35px 0;
      display: flex;
      align-items: auto;
      justify-self: space-between;

    }

    .logo {
      display: block;
      width: 250px;
      margin-right: 40px;
      margin-top: -20px;
    }

    .navbar ul li {
      list-style: none;
      display: inline-block;
      margin: 0 20px;
      position: relative;

    }

    .navbar ul li a {
      text-decoration: none;
      color: aliceblue;
      text-transform: uppercase;

    }

    .navbar ul li::after {
      content: '';
      height: 2px;
      width: 0%;
      background: #FCFAFA;
      position: absolute;
      left: 0;
      bottom: -10px;
      transition: 0.5s;

    }

    .navbar ul li:hover::after {
      width: 100%;
    }


    .content {
      width: 100%;
      position: relative;
      transform: translateY(-40%);
      text-align: center;
      color: rgb(0, 0, 102);
    }

    .content h1 {
      font-size: 70px;
      margin-top: 240px;

    }

    .content p {
      margin: 20px auto;
      font: weight 90px;
      line-height: 25px;
    }


    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      background: #00CED1;
      padding: 2rem 9%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 1000;
      box-shadow: 0 .5rem 1 rem rgba(0, 0, 0, .1);
    }



    .container {
      max-width: 1170px;
      margin: auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
    }

    ul {
      list-style: none;
    }


    .container2 {
      max-width: 1170px;
      margin: auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
    }

    ul {
      list-style: none;
    }

    /* Style inputs */
    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: rgb(153, 153, 255);
    }

    /* Style the container/contact section */
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
      float: left;
      width: 50%;
      margin-top: 6px;
      padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

      .column,
      input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }

    body {
      background-image: url('images/bg_1.jpg');
    }
  </style>

</head>

<body>
  <div class="banner">
    <div class="navbar">
      <header>
        <img src="images/logouitm.png" class="logo"></a>
        <ul>
          <li><a href="home.php">HOME</a></li>
          <li><a href="borrow.php">BORROW </a></li>
          <li><a href="book_list.php">BOOK LIST</a></li>
          <li><a href="spaceb.php">SPACE BOOKING LIST</a></li>
          <li><a href="contactus.php">CONTACT US</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </header>
    </div>

    </section>


    <section id="hero" style="font-family: 'Playball', cursive; "><br>
      <center>
        <h1 style="color: #FCFAFA;"><br>Library
      </center>
      <center>
        <h1 style="color: #DCF126"><b>Tun Dr.Ismail</b>
      </center><br>

    </section>
    <h2 align="center " style="color: #DCF126"><i>Responsive Contact Section</i></h2><br><br>


    <div class="container">
      <div style="text-align:center">
        <h2>Contact Us</h2>
        <br>
        <p>Telephone: 03 5521 7859 <br> Email: korporatptar@salam.uitm.edu.my </p>
      </div>
      <div class="row">
        <div class="column">
          <img src="images/library1.jpg" style="width:100%">
          <img src="images/library2.jpg" style="width:100%">
        </div>
        <div class="column">
          <form action="form_feedback.php" method="POST">
            <label for="stu_id">Student ID</label>
            <input type="text" id="stu_id" name="stu_id" placeholder="Enter your id" required>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>
            <label for="course">course</label>
            <input type="text" id="course" name="course" placeholder="Enter your course" required>
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" placeholder="Write something.." style="height:170px" required></textarea>
            <input type="submit" value="Submit" name="submit">
          </form>
        </div>
      </div>
    </div><br><br>

    <footer class="tm-bg-gray pt-5 pb-6 tm-text-gray tm-footer">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12 px-5 mb-5">
          <h3 class="tm-text-primary mb-4 tm-footer-title">CONTACT US</h3>
          <p>TUN DR. ISMAIL LIBRARY<br>
            Universiti Teknologi MARA (UiTM)
            Campus Segamat,85000, Segamat,Johor,
            Malaysia.
            <br><br>webmedia@uitm.edu.my<br><br>Tel: +603-5544 2000
          </p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
          <h3 class="tm-text-primary mb-4 tm-footer-title">Quick Links</h3>
          <ul class="tm-footer-links pl-0">
            <li><a href="#">Ministry of Higher Education</a></li>
            <li><a href="#">Academic Calendarrt</a></li>
            <li><a href="#">Intake Calendar</a></li>
            <li><a href="#">Graduate Quick Search</a></li>
            <li><a href="#">Library</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">UiTM Holdings</a></li>
            <li><a href="#">WiFi UiTM</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-1 col-sm-6 col-12 px-5 mb-5">
          <ul class="tm-footer-links pl-0"><br><br>
            <li><a href="#">Hotel UiTM</a></li>
            <li><a href="#">UiTM FC</a></li>
            <li><a href="#">E-Complaint</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Work With Us</a></li>
            <li><a href="#">JobShop</a></li>
            <li><a href="#">Site Map</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
          <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
            <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
            <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
            <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
            <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
          </ul>
          <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
          <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
          © COPYRIGHT UNIVERSITI TEKNOLOGI MARA 2020.
        </div>
        <div class="col-lg-4 col-md-4 col-12 px-3 text-left">
          <a href="h#" class="tm-text-gray" rel="sponsored" target="_parent">
            Disclaimer & Copyright | Privacy Statement | ICT Security Policy</a>
        </div>
      </div>
  </div>
  </footer>

</html>