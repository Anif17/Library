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
    </style>
    <?php
    //Connection to database 
    include 'db_connection.php';
    $search = $_REQUEST["txtSearch"];

    //Select Database
    $sql = "SELECT*FROM tb_book WHERE bk_isbn LIKE '%$search%' ORDER BY bk_title ASC;";
    $result = $mysqli->query($sql)
    ?>

</head>

<body background-color:>
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
        <center>
            <h1><b>WELCOME&nbsp;</b>
                <h1><?php
                    session_start();
                    echo $_SESSION['stud_id'];
                    ?><h1><b>TUN DR.ISMAIL LIBRARY</b></h1>
        </center><br>
        <?php
        if (empty($_SESSION['stud_id'])) {
            echo ("<SCRIPT LANGUAGE='JavaScript'> 
      window.alert('Session End. Please re-login!') 
      window.location.href='../index.php' 
      </SCRIPT>");
        } ?>

        <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="images/libry.jpg">
        </div>

        <div class="container-fluid tm-container-content tm-mt-60">
            <div class="row mb-4">
                <h2 class="col-6 tm-text-primary">
                    UiTM Library Books
                </h2>


            </div>
            <div class="row tm-mb-90 tm-gallery">
                <div class="col-xl-2 col-lg-2 col-md-5  col-10 mb-1">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book1.jpg" alt="Image" class="img-fluid" width="80%" align="center">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>BUSSINESS<br>MATHEMATICS</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=397818459">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">18 Oct 2021</span>
                        <span>1,906 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book2.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>BUSSINESS <br>ACCOUNTING</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=781845936">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">14 Oct 2021</span>
                        <span>3,100 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5" width="80%">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book3.jpg" alt="Image" class="img-fluid" width="82%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>STATISTICS FOR<br> UiTM,</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=927364632">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">12 Oct 2021</span>
                        <span>7,460 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book4.jpg" alt="Image" class="img-fluid" width="83%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>CALCULUS</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=978184124">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">10 Oct 2021</span>
                        <span>5,402 views</span>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book5.jpg" alt="Image" class="img-fluid" width="78%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>ASSEMBLY<br>LANGUAGE</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=978184211">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">24 Sep 2021</span>
                        <span>7,008 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book6.jpg" alt="Image" class="img-fluid" width="85%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>BUSSINESS<br>LAW</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=978184593">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">20 Sep 2021</span>
                        <span>9,860 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book7.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>BAHASA<BR>MANDARIN</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=978184654">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">7 Sep 2021</span>
                        <span>10,900 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book8.jpg" alt="Image" class="img-fluid" width="75%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>PHYSICAL<br> EXAMINATION</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=983646261">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">12 Sep 2021</span>
                        <span>6,300 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book9.jpg" alt="Image" class="img-fluid" width="78%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>ACCOUNTING</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=457865452">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">10 Sep 2021</span>
                        <span>5,700 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book10.jpg" alt="Image" class="img-fluid" width="83%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>CORPORATE <br>FINANCE</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=145478548">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">8 Sep 2021</span>
                        <span>8,402 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book11.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>ELC231<br> MANUAL</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=124578965">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">4 Jan 2022</span>
                        <span>7,906 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book12.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>SYARIAH.ETIKA,<BR>SAINS & TEKNOLOGI</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=565742489">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">28 Jan 2022</span>
                        <span>2,700 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book13.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>MAT<br>183</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=897456325">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">22 Jan 2022</span>
                        <span>4,510 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book14.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>LAND<br> ECONOMICS</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=545789632">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">14 Jan 2022</span>
                        <span>7,006 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-3 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book15.jpg" alt="Image" class="img-fluid" width="83%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>PRINCIPLE OF<br> MANAGEMENT</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=564578255">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">9 Feb 2022</span>
                        <span>1,300 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book16.jpg" alt="Image" class="img-fluid" width="82%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>INVESTMENT</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=641389753">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">3 Feb 2022</span>
                        <span>2,204 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book17.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>MOLECULLAR <BR>BIOLOGY</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=669872346">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">3 Jun 2022</span>
                        <span>2,204 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="image/book18.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>SOIL SCIENCE &<br> ANALYSIS</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=578964543">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">3 Jun 2022</span>
                        <span>2,204 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="images/bookk1.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>MACRO<BR>ECONOMICS</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=454678932">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">3 Jun 2022</span>
                        <span>2,204 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="images/bookk2.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>BIG <br>DATA</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=994135715">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">3 Jun 2022</span>
                        <span>2,204 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="images/bookk3.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>SKILLED <BR>READING</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=487965428">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">3 Jun 2022</span>
                        <span>2,204 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="images/bookk4.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>MICRO<BR>ECONOMICS</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=231546148">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">3 Jun 2022</span>
                        <span>2,204 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="images/bookk5.jpg" alt="Image" class="img-fluid" width="80%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>myENGLISH <BR>CHECKPOINT</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=884715468">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">3 Jun 2022</span>
                        <span>2,204 views</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                    <figure class="effect-ming tm-video-item">
                        <img src="images/bookk6.jpg" alt="Image" class="img-fluid" width="87%">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>FINANCIAL <BR>ACCOUNTING</h2>
                            <a href="http://localhost/library/users/borrowBK.php?edit=1&id=554131478">View more</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light">3 Jun 2022</span>
                        <span>2,204 views</span>
                    </div>
                </div>
            </div> <!-- row -->

        </div>
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

    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>

</html>