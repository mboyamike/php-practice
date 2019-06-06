<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="topnav">
        <a href="ViewAuthors.php">View registered Authors</a>
    </div>
    <div class="main">
        <form action="processes/AutRegistration.php" method="POST" class="main-form" id="regform">
            <input type="text" name="fName" placeholder="Full Author Name">    
            <input type="text" name="email" placeholder="user@mail.com">
            <input type="text" name="address" placeholder="Address">
            <textarea name="biography" placeholder="Author Biography" form="regform" class="bio"></textarea>
            <div class="dob">
                Date of Birth: <input type="date" name="dob" placeholder="Date Of Birth">
            </div>
            <input type="checkbox" name="suspended"> Is suspended? <br>
            <input type="submit" value="Register Author" name="register">
        </form>
    </div>
</body>
</html>