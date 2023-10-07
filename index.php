<?php
if(isset($_REQUEST['submit'])){

    $name = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    
    echo "Name: ". $name."<br>";
    echo "Email: ".$email."<br>";
    echo "Pass: ".$pass;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>

    <form action="#" method="post">
        <input type="text" name="username" id=""><label>Name</label><br>
        <input type="email" name="email" id=""><label>Email</label><br>
        <input type="password" name="password" id=""><label>Password</label><br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>