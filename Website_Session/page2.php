<?php
session_start();

$fname = $_SESSION['fname'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Sessions</title>
</head>
<body>
    <h4>Thankyou <?php echo $fname; ?>, You have subscribed with the email <?php echo $email; ?></h4>
</body>
</html>