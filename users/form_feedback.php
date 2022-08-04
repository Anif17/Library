<?php
include('db_connection.php');

if (isset($_POST['submit'])) {
    $idC = $_POST['stu_id'];
    $emailC = $_POST['email'];
    $courseC = $_POST['course'];
    $commentC = $_POST['comment'];

    //add new student
    $sql = "INSERT into tb_contact(stu_id,email_contact,course_contact,comment_contact) values ('$idC','$emailC','$courseC','$commentC')";
    $result = $mysqli->query($sql);
    if ($result) {
        echo '<script>alert("Success Contact!")</script>';
        header('Refresh:0; home.php');
    } else {
        echo '<script>alert("Error while Insert!")</script>';
        header('Refresh:0; home.php');
    }
}
