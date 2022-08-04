<?php
include('db_connection.php');

if (isset($_GET['deleted'])) {
    $sql = "delete from bk_borrow where borrowID = '{$_GET['id']}' ";
    $result = $mysqli->query($sql);
    if ($result) { {
            echo '<script>alert("Success Deleted")</script>';
            header('Refresh:0; borrow_edit.php');
        }
    }
}
