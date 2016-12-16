<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prices(admin)</title>
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

        <li class="active"><a href="home.php">Home</a></li>
         <li class="active"><a href="gallery.php">Gallery</a></li>
         <li class="active"><a href="fdbck.php">Feedback</a></li>
         <li class="active"><a href="registration.php">Add Members</a></li>
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
    <h1 id = "wordmark"> EDIT AND DISPLAY PRICES!</h1> 
    <h3>Welcome <?php echo $_SESSION['username']; ?>!</h3>  
    <hr> 
       
    
  <div>
  <?php
  require('db2.php');
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	


   if(isset($_POST['update'])){
$UpdateQuery = "UPDATE products SET Id='$_POST[id]', productname='$_POST[productname]', size='$_POST[size]', perpiece='$_POST[piece]', price='$_POST[price]' WHERE id='$_POST[hidden]'";
mysql_query($UpdateQuery, $connection);

};
if(isset($_POST['delete'])){
$DeleteQuery = "DELETE  FROM products WHERE Id='$_POST[hidden]'";
mysql_query($DeleteQuery, $connection);

};


$sql= "SELECT * FROM products";
$data=mysql_query($sql, $connection);
echo "<table  border=1>
<tr>
<th>Product Name</th>
<th>Size</th>
<th>Piece</th>
<th>Price</th>
</tr>
";

while($products=mysql_fetch_array($data)){
echo"<form action=pricesA.php method=post>";
	 echo "<tr>";
	echo "<td>" ."<input type=text name=productname value=" .$products['productname'] . " </td>";
	echo "<td>" ."<input type=text name=size value=" .$products['size'] . " </td>";
	echo "<td>" ."<input type=number name=piece value=" .$products['perpiece'] . " </td>";
echo "<td>" ."<input type=number name=price value=" .$products['price'] . " </td>";
echo "<td>" ."<input type=hidden name=hidden value=" .$products['id'] . " </td>";
echo "<td>" ."<input type=submit name=update value=UPDATE" . " </td>";
echo "<td>" ."<input type=submit name=delete value=DELETE" . " </td>";
	echo "</tr>";
	echo "</form>";
	
};
echo "</table>";
    ?>
  </div>
  <div style="float:left;">
<form action="pricesA.php" method="post">
<table class="table-responsive">
<tr><td>Product Name:</td></tr><tr><td><input type="text" name="productname" required /></td></tr>
<tr><td>Size:</td></tr><tr><td><input type="text" name="size" required /> </td></tr>
<tr><td>How many Piece:</td></tr><tr><td><input type="number" name="perpiece" required /> </td></tr>
<tr><td>Price:</td></tr><tr><td><input type="number" name="price" required /></td></tr>
</table>
<input type="submit" name="submit" />
</form>

	<?php
	require('db2.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
	
	$sql2 = "INSERT INTO products(productname, size, perpiece, price) VALUES('$_POST[productname]','$_POST[size]','$_POST[perpiece]','$_POST[price]')";
	$record = mysql_query($sql2, $connection);
	}
?>
</div>
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
