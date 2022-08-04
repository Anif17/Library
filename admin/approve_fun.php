<?php
include('db_connection.php');

$stu_id = $_GET['stu_id'];
$bk_isbn = $_GET['bk_isbn'];
$sql = "UPDATE bk_borrow  SET status = 'success' where stu_id='$stu_id' AND bk_isbn='$bk_isbn'";
$result = $mysqli->query($sql);

if ($result) {
    echo '<script>alert("Success Approve!")</script>';
    header('Refresh:0; borrow_verify.php');
} else {
    echo '<script>alert("Error Occured!")</script>';
    header('Refresh:0; borrow_verify.php');
}
