<?php 
if(isset($_POST['submit'])){
    echo 123;
    //every page use data start session 
    //session vaiables stored on the server
    session_start();
    
    $_SESSION['fname'] = htmlentities($_POST['fname']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    //redirect from php to other page 
    header('Location: page2.php');

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Sessions</title>
</head>
<body>

<form method="POST" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
  <label for="fname">First name:</label><br>
  <input type="text"  name="fname" placeholder="Enter Name"><br>
  <label for="email">Email:</label><br>
  <input type="text" name="email"  placeholder="Enter Email" ><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
        

</body>
</html>