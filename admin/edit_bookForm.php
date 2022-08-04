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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/admin_page.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="css/borrowStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>



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
    include('db_connection.php');

    $id = $_GET['id'];
    $sql = "SELECT * from tb_book where bk_isbn='$id'";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {
        $bk_isbn = $row['bk_isbn'];
        $bk_title = $row['bk_title'];
        $bk_page = $row['bk_page'];
        $bk_rating = $row['bk_rating'];
        $pub_date = $row['published_date'];
        $pub_id = $row['publisher_id'];
    }

    ?>


    <div class="container">
        <div align="center" style="font-size: 40px;"><span class="badge badge-info">EDIT BOOK</span>
        </div>
        <div class="content">
            <form action="edit_bkFun.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">BOOK ISBN</span>
                        <input type="text" placeholder="Enter ID" name="bkIsbn" value="<?php echo $bk_isbn; ?>" required readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">BOOK TITLE</span>
                        <input type="text" placeholder="Enter book ISBN" name="bkTitle" value="<?php echo $bk_title; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">BOOK PAGE</span>
                        <input type="number" placeholder="Enter book page" name="bkPage" value="<?php echo $bk_page; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">BOOK RATING</span>
                        <input type="number" placeholder="Enter book rating" name="bkRating" value="<?php echo $bk_rating; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">BOOK PUBLISHED DATE</span>
                        <input type="date" name="bkPub" value="<?php echo $pub_date; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">BOOK PUBLISHER ID</span>
                        <input type="text" placeholder="Enter book publisher id" name="pubID" value="<?php echo $pub_id; ?>" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="btnEdit">
                </div>
            </form>
        </div>
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