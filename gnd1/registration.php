<?php include("auth.php");    //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<nav  class="navbar navbar-default" id = "navcolor">

	<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	 <span class="glyphicon glyphicon-align-justify"></span>
  </button>

  <div class="container" id = "navcolor">
    <div class="navbar-header">
    <img src="images/pro.jpg" height ="70px">
    </div>



    <div>
 <nav class="navbar-collapse collapse" role="navigation">
      <ul  class="nav pull-left navbar-nav" class="nav navbar-nav">

        <li class="active"><a href="home.php">Home</a></li>
         <li class="active"><a href="gallery.php">Gallery</a></li>
         <li class="active"><a href="fdbck.php">Feedback</a></li>
          <li class="active"><a href="contactus.php">Contact Us</a></li>
         <li class="active"><a href="logout.php">Logout</a></li>
    
      </ul>
      <ul class="nav navbar-nav navbar-right">
    
      </ul>
  </nav>
    </div>
  </div>
</nav>

<div class = "container">
  <div class="row">
  	 <div class="col-md-12">
	<br>
	  <div class="jumbotron" >
    <h1 id = "wordmark"> Register New Employees!</h1> 
     <h3>Welcome <?php echo $_SESSION['username']; ?>!</h3>    
    <hr> 
       
    
    <img id = "hiring" class = "img-responsive"src="images/hiring.jpg" alt="hire" style="float:right;width:300px;height:700px;">
	<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysql_query($query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div style="float:left;width:700px;height:400px;">
<form name="registration" action="" method="post">
<table>
<tr>
<td>Username:</td><td><input type="text" name="username" placeholder="Username" required /></td></tr><br />
<tr>
<td>Email:</td><td><input type="email" name="email" placeholder="Email" required /></td></tr><br />
<tr>
<td>Password:</td><td><input type="password" name="password" placeholder="Password" required /></td></tr><br />
</table>
<input type="submit" name="submit" value="Register" />
</form>

</div>
<?php } ?>
  </div>
</div>
</div>

</div>
<br>
<br>
<div class="container-fluid" id="footer">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
    
   		  <h3 class="text-muted credit">ALL RIGHTS RESERVED 2016</h3>
      <p></p>
      <hr>
      <ul class="list-inline center-block">

      </ul>
      
  	</div><!--/col-->
</div>

</body>
</html>
