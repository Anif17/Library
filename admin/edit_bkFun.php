<?php
include('db_connection.php');

if (isset($_POST['btnEdit'])) {
    $bkIsbn = $_POST['bkIsbn'];
    $bkTitle = $_POST['bkTitle'];
    $bkPage = $_POST['bkPage'];
    $bkRating = $_POST['bkRating'];
    $bkPub = $_POST['bkPub'];
    $pubID = $_POST['pubID'];

    //update
    $sql = "update tb_book set bk_isbn= '$bkIsbn', bk_title='$bkTitle',bk_page='$bkPage',
            bk_rating= '$bkRating', published_date= '$bkPub', publisher_id= '$pubID' where bk_isbn='$bkIsbn'";

    $result = $mysqli->query($sql);
    if ($result) { {
            echo '<script>alert("Success Edit")</script>';
            header('Refresh:0; book_edit.php');
        }
    } else {
        echo '<script>alert("Error Edit")</script>';
    }
}

