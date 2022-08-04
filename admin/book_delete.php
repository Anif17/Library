<?php
include('db_connection.php');

if (isset($_GET['deleted'])) {
    $sql = "delete from tb_book where bk_isbn = '{$_GET['id']}' ";
    $result = $mysqli->query($sql);
    if ($result) { {
            echo '<script>alert("Success Deleted")</script>';
            header('Refresh:0; book_edit.php');
        }
    }
}
