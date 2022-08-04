<?php
include('db_connection.php');

if (empty($_POST['btnEdit'])) {
    $br_id = $_POST['brID'];
    $stu_id = $_POST['stuID'];
    $bk_isbn = $_POST['bookIsbn'];
    $tk_date = date('Y-m-d H:i:s', strtotime($_POST['takenDate']));
    $br_date = date('Y-m-d H:i:s', strtotime($_POST['broughtDate']));
    $status = $_POST['status'];

    //update
    $sql = "update bk_borrow set borrowID='$br_id', stu_id= '$stu_id', bk_isbn='$bk_isbn', takenDate='$tk_date', broughtDate= '$br_date' , status = '$status' where borrowID='$br_id'";

    $result = $mysqli->query($sql);
    if ($result) { {
            echo '<script>alert("Success Edit")</script>';
            header('Refresh:0; borrow_edit.php');
        }
    } else {
        echo '<script>alert("Error Edit")</script>';
        header('Refresh:0; borrow_edit.php');
    }
}
