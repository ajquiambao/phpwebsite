
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="Description" content="Printing Solutions">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
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

        <li class="active"><a href="index.html">Home</a></li>
         <li class="active"><a href="gallery.html">Gallery</a></li>
         <li class="active"><a href="fdbck.html">Feedback</a></li>
          <li class="active"><a href="contactus.html">Contact Us</a></li>
    
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
    <h1 id = "wordmark"> Log In!</h1>   
    <hr> 
       
    
    <img id = "hiring" class = "img-responsive"src="images/hiring.jpg" alt="hire" style="float:right;width:300px;height:700px;">
	<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: home.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div style="float:left;">
<form action="" method="post" name="login">
Username:<input type="text" name="username" placeholder="Username" required /><br />
Password: <input type="password" name="password" placeholder="Password" required /><br />
<input name="submit" type="submit" value="Login" />
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
