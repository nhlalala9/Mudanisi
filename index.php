<?php 
session_start();

    include("connection.php");
    include("function.php");
     
    $user_data = check_login($con);


?>

<!DOCTYPE html>
<html>
<head>
    <title>My web application</title>
</head>
<body>

       <a href ="logout.php">Logout</a>
       <h1>This is the index page</h1>

       <br>
       Hello, <?php echo $user_name['user_name']; ?>
</body>
</html>
