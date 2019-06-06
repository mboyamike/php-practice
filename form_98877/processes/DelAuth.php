<?php
    include_once('../configs/DbConnection.php');

    $sql = "DELETE FROM authorstb WHERE authorid = '$_POST[delete]'";
    if($DbConn->query($sql) === TRUE) {
        header('location: ../ViewAuthors.php');
    } else {
        print $DbConn->error;
    }
?>

