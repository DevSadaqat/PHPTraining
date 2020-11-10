<?php
//messages vars 
$msg = "";
$msgClass = "";

//check For Submit 
if(filter_has_var(INPUT_POST, 'submit')){
    //get form data 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $textarea = $_POST['textarea'];

    //Check required fields data
    if(!empty($name) && !empty($email) && !empty($textarea)){
        //passed
        //Check Email 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
         //fail
         $msg = 'Please input the valid email address';
         $msgClass = 'alert-danger';
        }
        else {
           //passed
           echo 'PASSED';
         }
    }else {
        //f
      $msg = 'Please fill in all the details';
      $msgClass = 'alert-danger';
    }

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Contact us</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/
bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Haileybury</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
 <?php if($msg != ''): ?>
  <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?></div>
 <?php endif; ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder=" Enter Name" 
    value="<?php echo isset($_POST['name']) ? $name: ''; ?>">
  </div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email"  class="form-control" id="exampleInputEmail1" placeholder="Enter email"
    value="<?php echo isset($_POST['email']) ? $email: ''; ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3"
    value="<?php echo isset($_POST['textarea']) ? $textarea: ''; ?>"></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>