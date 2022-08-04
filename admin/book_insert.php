    <?php
    include('db_connection.php');

    if (isset($_POST['btnsave'])) {
        $bk_isbn = $_POST['bkIsbn'];
        $bk_title = $_POST['bkTitle'];
        $bk_page = $_POST['bkPage'];
        $bk_rating = $_POST['bkRating'];
        $bk_pub = $_POST['bkPub'];
        $pub_id = $_POST['pubID'];

        //add new student
        $sql = "INSERT into tb_book(bk_isbn,bk_title,bk_page,bk_rating,published_date,publisher_id) values 
        ('$bk_isbn','$bk_title','$bk_page','$bk_rating','$bk_pub','$pub_id')";
        $result = $mysqli->query($sql);
        if ($result) {
            echo '<script>alert("Success Insert")</script>';
            header('Refresh:0; book_view.php');
        } else {
            echo '<script>alert("Error while Insert!")</script>';
            header('Refresh:0; book_insert.php');
        }
    }
    ?>
