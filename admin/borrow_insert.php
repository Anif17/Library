    <?php
    $stu_id = $_POST['stuID'];
    $bk_isbn = $_POST['bookIsbn'];
    $tk_date = date('Y-m-d H:i:s', strtotime($_POST['takenDate']));
    $br_date = date('Y-m-d H:i:s', strtotime($_POST['broughtDate']));

    $conn = new mysqli("localhost", "root", "", "library");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (mysqli_query($conn, "INSERT INTO bk_borrow(stu_id,bk_isbn,takenDate,broughtDate,status) VALUES ('$stu_id','$bk_isbn','$tk_date','$br_date','success')")) {
        echo '<script>alert("Success Insert")</script>';
        header('Refresh:0; borrow_View.php');
        die();
    } else {
        echo '<script>alert("The Student ID and Book ISBN is not available in database. Please enter the correct Student ID and Book ISBN")</script>';
        header('Refresh:0; borrow_View.php');
    }
    mysqli_close($conn);
    ?>
