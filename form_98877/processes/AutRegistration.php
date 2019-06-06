<?php
    include_once('../configs/DbConnection.php');

    if(isset($_POST['register'])) {
        $fname = $_POST['fName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $biography = $_POST['biography'];
        $dob = $_POST['dob'];
        $suspended = isset($_POST['suspended'])? 1: 0;

        $insert_author = "INSERT INTO authorstb (authorfullname, authoremail, authoraddress, authorbiography, authordateofbirth, authorsuspended) VALUES ('$fname', '$email', '$address', '$biography', '$dob', '$suspended')";

        if($DbConn->query($insert_author) === TRUE) {
            header('location: ../viewAuthors.php');
        } else {
            echo "Error ".$DbConn->error;
        }

    }
?>