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
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: auto;
            justify-self: space-between;

        }

        .logo {
            display: block;
            width: 250px;
            margin-right: 5px;
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

        body {
            background-color: #e6eeff;
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

        <section>
            <img src="images/visionmission.jpg"><br><br>
            <center>
                <h1><b>UiTM Digital TUN DR. ISMAIL Library</b><br></h1>
                <center>
                    <center><br><br><img src="images/vmp.jpg"></center>
                    <hr>
                    <center>
                        <h4 style="color:black; font-size: 50px;" align=center><br>About Us<br>
                            <center> <br><img src="images/library1.jpg" width="700px"></center><br>
                            <h5><i>Perpustakaan Tun Dr. Ismail UiTM is committed to realize the aspirations of Universiti Teknologi MARA (UiTM)<br>
                                    to continuously achieve excellence and uplift UiTM to the global level. Thus, improving the quality of the information<br>
                                    delivery system has become the focus of PTAR in fulfilling the needs and expectations of our customers. PTAR has gone <br>
                                    through five (5) phases of transformation before becoming a Digital Library. To ensure the library continues to be relevant <br>
                                    and competitive, the library improves its service to its customers through service, collections and latest processes that<br>
                                    conforms to the needs of teaching, learning and research in UiTM. Multiple successes have been achieved, proving that PTAR<br>
                                    is able to provide superior and quality service to meet current customer expectations. I hope that PTAR continues to foster<br>
                                    smart partnerships towards developing a global brand to produce excellent and outstanding academics and graduates. This is<br>
                                    in line with UiTM's theme of "Unleashing Potentials, Shaping the Future". Finally, I hope that the UiTM Digital Library<br>
                                    book becomes a useful resource for services, collections and processes offered by the university.</i></h5>
                        </h4>
                    </center>

                    <br><br>
                    <hr>
        </section>
        <width="50%" align="center">
            <h1><b>UiTM HISTORY </b></h1>
            <marquee width="100%" bgcolor="white" scrolldelay=80 loop="infinite">

                <img src="images/h1.jpg" style width="20%">
                <img src="images/h2.jpg" style width="25%">
                <img src="images/h3.jpg" style width="21%">
                <img src="images/h4.jpg" style width="20%">
                <img src="images/h5.jpg" style width="20%">
                <img src="images/h6.jpg" style width="25%">
                <img src="images/h7.jpg" style width="24%">

            </marquee>
            <marquee width="100%" bgcolor="white" scrolldelay=80 loop="infinite">

                <img src="images/h8.jpg" style width="30%">
                <img src="images/h9.jpg" style width="20%">
                <img src="images/h10.jpg" style width="20%">
                <img src="images/h11.jpg" style width="20%">
                <img src="images/h12.jpg" style width="20%">
                <img src="images/h13.jpg" style width="20%">
                <img src="images/h14.jpg" style width="20%">

            </marquee>
            </section><br><br><br>
            <hr>
            <h1 align="center"><b> Uitm Library Organization Chart </b></h1>

            <center><img src="images/carta.jpg" width="1000" height="1300"></center>
            <hr>

            <div align="center" style="padding-top:30px; padding-bottom: 70px;">
                <h2 style="color: #452769; padding-top: 30px;">Main Office: </h2>
                <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.0573670460144!2d102.72711391475575!3d2.4879643981870294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31ce2c6ce929a871%3A0xc0dfa5fe6922a589!2sUiTM%20Cawangan%20Johor%2C%20Kampus%20Segamat!5e0!3m2!1sen!2smy!4v1657092728732!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
            </div>



            <footer class="tm-bg-gray pt-5 pb-6 tm-text-gray tm-footer">
                <div class="row">
                    <div class="col-lg-3 col-md-15 col-12 px-5 mb-5" align="left">
                        <h3 class="tm-text-primary mb-4 tm-footer-title">CONTACT US</h3>
                        <p>TUN DR. ISMAIL LIBRARY<br>
                            Universiti Teknologi MARA (UiTM)
                            Campus Segamat,85000, Segamat,Johor,
                            Malaysia.
                            <br><br>webmedia@uitm.edu.my<br><br>Tel: +603-5544 2000
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5" align="left">
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
                    <div class="col-lg-2 col-md-1 col-sm-6 col-12 px-5 mb-5" align="left">
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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5" align="left">
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
</body>