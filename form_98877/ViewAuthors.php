<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Registered Authors</title>
</head>
<body>
    <?php
        include_once('configs/DbConnection.php');
    ?>
    <div class="topnav">
        <a href="index.php">Add new Author</a>
    </div>
    <?php

        $sql = "SELECT * FROM authorstb";
        $result = $DbConn->query($sql);
        print "<table>";
        if($result->num_rows > 0) {
            print 
                "<thead> 
                    <tr>
                        <th> Name </th> 
                        <th> Email </th> 
                        <th> address </th> 
                        <th> Biography </th> 
                        <th> Date Of birth </th> 
                        <th> is suspended? </th> 
                    </tr>
                </thead> 
                <tbody>";

            while($row = $result->fetch_assoc()) {
                print 
                "<tr>
                    <td>$row[authorfullname]</td>
                    <td>$row[authoremail]</td>
                    <td>$row[authoraddress]</td>
                    <td>$row[authorbiography]</td>
                    <td>$row[authordateofbirth]</td>
                    <td> ";
                    
                    $x = $row['authorsuspended']? "Yes": "No";
                    print $x;
                    
                print '</td>
                        <td class="cell-form"> 
                            <form method="POST" action="DelAuth.php">
                                <button type="submit" formaction="processes/DelAuth.php" value="'.$row['authorid'].'" name="delete"> Delete Author </button>
                            </form>
                        </td>
                </tr>';     
            }
            print "</tbody>";
        }
    ?>
</body>

</html>
