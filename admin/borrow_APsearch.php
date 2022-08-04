<?php
session_start();

if (empty($_SESSION['staff_id'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'> 
      window.alert('Session End. Please re-login!') 
      window.location.href='../index.php' 
      </SCRIPT>");
} ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/admin_page.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/image.css">
    <link rel="stylesheet" href="assets/css/search.css">
</head>

<body style="background-color: rgb(198,198,198);">

    <!--header-->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="home_page.php"><em>UiTM</em> LIBRARY</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="home_page.php" class="external">HOME</a></li>

                <li><a href="borrow_verify.php" class="external">RESERVATION LIST</a></li>

                <li class="has-submenu"><a href="#">LIBRARY VIEW</a>
                    <ul class="sub-menu">
                        <li><a href="stud_view.php" class="external">STUDENT DATA</a></li>
                        <li><a href="book_view.php" class="external">BOOK DATA</a></li>
                        <li><a href="borrow_View.php" class="external">BORROW DATA</a></li>
                        <li><a href="comment_View.php" class="external">CONTACT US DATA</a></li>
                    </ul>
                </li>

                <li class="has-submenu"><a href="#">LIBRARY ADD</a>
                    <ul class="sub-menu">
                        <li><a href="book_addForm.php" class="external">BOOK</a></li>
                        <li><a href="borrow_addForm.php" class="external">BORROW</a></li>
                    </ul>
                </li>

                <li class="has-submenu"><a href="#">LIBRARY EDIT</a>
                    <ul class="sub-menu">
                        <li><a href="book_edit.php" class="external">BOOK</a></li>
                        <li><a href="borrow_edit.php" class="external">BORROW</a>
                    </ul>
                </li>
                <li><a href="logout.php" class="external">LOG OUT</a></li>
            </ul>
        </nav>
    </header>

    <?php
    //Connection to database 
    include 'db_connection.php';
    $search = $_REQUEST["txtSearch"];

    //Select Database
    $sql = "SELECT*FROM bk_borrow WHERE borrowID LIKE '%$search%' ORDER BY borrowID ASC";
    $result = $mysqli->query($sql)
    ?>

    <h1 align="center" style="padding-top: 7%; padding-bottom: 2%;"><span class="badge badge-info">RESERVATION LIST</span> </h1>
    <div class="container">

        <div align="center" style="padding-top: 2%;">

            <div class="col-md-8">
                <div class="search">
                    <i class="fa fa-search"></i>
                    <form name="form1" method="post" action="borrow_APsearch.php">
                        <input type="text" class="form-control" name="txtSearch" placeholder="Search using ID..">
                        <button class="btn btn-primary">Search</button>
                    </form>
                </div>

            </div>

        </div>
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
                    <th scope="col">APPROVE</th>
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
                            <td>
                                <a href="approve_fun.php?edit=1&id=<?php echo $row['borrowID']; ?>">
                                    <span class="badge badge-secondary">
                                        <img src="icon/approve.ico" alt="approve" width="40px"> <span>Approve</span></a>
                                </span>
                            </td>
                        </tr>

                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <th colspan="5">There's no reservation from the students!!!</th>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
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