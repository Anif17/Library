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
            width: 100%;
        }

        body {
            align-items: center;
            background: url(images/bg_n.jpg);
            background-size: cover;
            background-position: center;
        }

        .borrow .heading {
            font-size: 1.5rem;
            color: #333;
            font-weight: bolder;
        }

        .borrow .borrow-box {
            width: 500px;
            border-radius: 3rem;
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
            width: 400px;
            height: 40px;
            margin-top: 20px;
            padding-left: 10px;
            padding-right: 20px;
            border: 1px solid #777;
            border-radius: 14px;
            outline: none;
        }

        .borrow .borrow-box .btn {
            border-radius: 10px;
            color: #fff;
            margin-top: 18px;
            padding: 10px;
            background-color: #47c35a;
            font-size: 12px;
            border: none;
            cursor: pointer;
        }

        .borrow .borrow-box div {
            margin-top: 8rem;
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

    <?php
    include('db_connection.php');

    $bk_i = $_GET['id'];
    $sql = "SELECT * from tb_book where bk_isbn='$bk_i' ";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {
        $bk_i = $row['bk_isbn'];
        $bk_t = $row['bk_title'];
    }

    ?>
    <section class="borrow" id="borrow">
        <div class="borrow-box">
            <form action="borrow_insert.php" method="POST">
                <h5 align="center" class="heading"><b>RESERVATION FORM FOR BOOK</b></h5><br>
                <center>
                    <h2><?php echo $bk_t; ?></h2>
                    <hr>
                    <b>Student ID:</b>
                    <input type="text" class="input-field" name="stuID" placeholder="Enter Your Student ID" value="<?php echo $_SESSION['stud_id'] ?>" readonly><br>
                    <b>Book ID:</b>
                    <input type="text" class="input-field" name="Book_isbn" placeholder="Enter Your Book ID" value="<?php echo $bk_i ?>" readonly><br>
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