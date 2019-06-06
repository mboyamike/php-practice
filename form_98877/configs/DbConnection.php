<?php
    include_once('constants.php');

    $DbConn = new mysqli(HOST, HOSTUSER, HOSTPASS, DATABASE);

    if ($DbConn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

?>