<?php
session_start();
if (is_null($_SESSION['stud_id'])) {
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

        #hero {
            background-image: url("images/lib.jpg");
            height: 50px;
            width: 100%;
            background-position: top 25% right 0;
            background-size: cover;
            padding: 0 80px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        #hero h4 {
            padding-bottom: 15px;

        }

        #hero h1 {
            color: skyblue;
        }

        #hero button {
            background-image: url("");
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

        th,
        td {
            border: 1px solid black;
            border-radius: 10px;
        }


        .p {
            color: #FCFAFA;
        }

        body {
            align-items: center;
            background: url(images/bg_n.jpg);
            background-size: cover;
            background-position: center;
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
        <?php
        //Connection to database 
        include 'db_connection.php';
        $search = $_REQUEST["txtSearch"];

        //Select Database
        $sql = "SELECT*FROM bk_borrow WHERE borrowID LIKE '%$search%' ORDER BY borrowID ASC;";
        $result = $mysqli->query($sql)
        ?>

        <h1 align="center" style="padding-top: 7%; padding-bottom: 2%;"><span class="badge badge-info">STUDENT DATA</span> </h1>

        <div class="tm-hero d-flex justify-content-center align-items-center">
            <form class="d-flex tm-search-form" name="form1" method="POST" action="searchSpace.php">
                <input class="form-control tm-search-input" type="search" placeholder="Search using Borrow ID.." aria-label="Search" name="txtSearch">
                <button class="btn btn-outline-success tm-search-btn" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <br>

        <div style="width: 90%; margin-left: auto; margin-right: auto;">
            <table class="table table-hover table-dark" cellpadding="3" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">BORROW ID</th>
                        <th scope="col">STUDENT ID</th>
                        <th scope="col">BOOK ISBN</th>
                        <th scope="col">TAKEN DATE</th>
                        <th scope="col">BROUGHT DATE</th>
                        <th scope="col">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    //Fetch Data form database
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row['borrowID']; ?></td>
                                <td><?php echo $row['stu_id']; ?></td>
                                <td><?php echo $row['bk_isbn']; ?></td>
                                <td><?php echo $row['takenDate']; ?></td>
                                <td><?php echo $row['broughtDate']; ?></td>
                                <td>
                                    <span class="badge badge-info" style="font-size: 17px;">
                                        <?php echo $row['status']; ?>
                                    </span>
                                </td>
                            </tr>

                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <th colspan="5">There's No data found!!!</th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

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


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function() {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
        if ($(e.target).hasClass('external')) {
            return;
        }
        e.preventDefault();
        $('#menu').removeClass('active');
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
        checkSection();
    });
</script>



</html>