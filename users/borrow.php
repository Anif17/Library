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
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            outline: none;
            border: none;
            text-decoration: none;
            transition: .2s linear;
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
            width: 230px;
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
            width: 80%;
        }

        body {
            align-items: center;
            background: url(images/bg_n.jpg);
            background-size: cover;
            background-position: center;
        }

        .borrow .heading {
            font-size: 2rem;
            color: #333;
            font-weight: bolder;
        }

        .borrow .borrow-box {
            width: 500px;
            border-radius: 4rem;
            background-color: #fff;
            box-shadow: 0 0 20px 0 #999;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            margin-top: 50px;
        }

        .borrow form {
            margin: 20px;
        }

        .borrow .borrow-box .input-field {
            width: 460px;
            height: 40px;
            margin-top: 20px;
            padding-left: 10px;
            padding-right: 10px;
            border: 1px solid #777;
            border-radius: 14px;
            outline: none;
        }

        .borrow .borrow-box .btn {
            border-radius: 20px;
            color: #fff;
            margin-top: 18px;
            padding: 10px;
            background-color: #47c35a;
            font-size: 12px;
            border: none;
            cursor: pointer;
        }

        .borrow .borrow-box div {
            margin-top: 2rem;
            font-size: 120%;
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
    </div>
    <section class="borrow" id="borrow">
        <div class="borrow-box">
            <form action="borrow_insert.php" method="POST">
                <h4 align="center" class="heading"><b>FORM TO RESERVATION THE BOOK</b></h4>
                <hr>
                <center>
                    <b>Student ID:</b>
                    <input type="text" class="input-field" name="stuID" placeholder="Enter Your Student ID" value="<?php echo $_SESSION['stud_id'] ?>" readonly><br>
                    <b>Book ID:</b>
                    <input type="text" class="input-field" name="Book_isbn" placeholder="Enter Your Book ID" required><br>
                    <b>Taken date:</b>
                    <input type="date" class="input-field" name="takenDate" placeholder="day/month/year"><br>
                    <b>Brought Date:</b>
                    <input type="date" class="input-field" name="broughtDate" placeholder="day/month/year">
                    <input type="submit" class="btn" value="Submit" name="submit">
        </div>
        </center>
        </form>
        </div>
    </section>


    <br><br><br><br><br><br>
    <footer class="tm-bg-gray pt-5 pb-6 tm-text-gray tm-footer">
        <div class="row">
            <div class="col-lg-3 col-md-15 col-12 px-5 mb-5">
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
</body>

</html>