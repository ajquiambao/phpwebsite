
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prices</title>
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
	 <li class="active"><a href="prices.php">Prices</a></li>
         <li class="active"><a href="fdbck.html">Feedback</a></li>
          <li class="active"><a href="contactus.html">Contact Us</a></li>
          <li class="active"><a href="login.php">Login</a></li>
    
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
    <h1 id = "wordmark">  DISPLAY PRICES!</h1> 
  
    <hr> 
       
    
  <div>
  <img id = "hiring" class = "img-responsive"src="images/hiring.jpg" alt="hire" style="float:right;width:300px;height:700px; >
  </div>
 
  
<div style="float:left;">
  <form>
	<?php
	require('db2.php');
    $sql = "SELECT * FROM products";
$data = mysql_query($sql, $connection);
echo "<table border=1 cellpadding=10>
	<tr>
	<th>Product Name</th>
	<th>Size</th>
	<th>Piece</th>
	<th>Price</th>
	</tr>
	

";
while($products =mysql_fetch_array($data))
{
echo"<tr>";
	echo"<td>" .$products['productname'] . "</td>";
	echo"<td>" .$products['size'] . "</td>";
	echo"<td>" .$products['perpiece'] . "</td>";
	echo"<td>" .$products['price'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "</tr>";
	echo "<tr>";
	echo "</tr>";
	
	
}

echo "</table>";
 ?>
 </form>

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
