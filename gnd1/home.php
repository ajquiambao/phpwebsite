<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>G&amp;D Printing Solutions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

        <li class="active"><a href="index.php">Home</a></li>
         <li class="active"><a href="gallery.php">Gallery</a></li>
         <li class="active"><a href="fdbck.php">Feedback</a></li>
          <li class="active"><a href="contactus.php">Contact Us</a></li>
          <li class="active"><a href="registration.php">Add Members</a></li>
          <li class="active"><a href="logout.php">Logout</a></li>
    
      </ul>
      <ul class="nav navbar-nav navbar-right">
    
      </ul>
  </nav>
    </div>
  </div>
</nav>
  
<div class="container">
	<br>


					  				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
				
		 
											 
											  <!-- Wrapper for slides -->
											  <div class="carousel-inner">
                          <div class="item active">
                          <center>  <img src="images/banner.jpg" alt="G&D Printing Solutions Banner" > </center>
                           
                          </div>
                          <div class="item">
                       <center> <img src="images/profile.jpg"  alt="G&D Printing Solutions " width="360" height="400" > </center>
                            
                          </div>
                          <div class="item">
                          <center>  <img src="images/taur.jpg"  lt="G&D Printing Solutions " > </center>
                           
                          </div>
						  
                        </div>
											 
											  <!-- Controls -->
											  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
											    <span class="glyphicon glyphicon-chevron-left"></span>
											  </a>
											  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
											    <span class="glyphicon glyphicon-chevron-right"></span>
											  </a>
									</div> 
	<br>
	<br>
	
  <div class="row">

    <div class="col-md-4">
 	
 		  <div   class="panel panel-default" >
      <div id="services" class="panel-heading">Services</div>
   <div class="panel-footer" >SIGNS/BUILD-UP LETTERS</div>
   <div class="panel-footer" >OFFSET/DIGITAL PRINTING</div>
   <div class="panel-footer">LARGE FORMAT PRINTING</div>
   <div class="panel-footer" >CUSTOMIZED PRINTS</div>
   <div class="panel-footer">TSHIRT PRINTING</div>
   <div class="panel-footer" >SILKSCREEN</div>
   <div class="panel-footer" >HEATPRESS</div>
   <div class="panel-footer">BILLBOARD</div>
    <div class="panel-footer">TARPAULIN</div>
   <div class="panel-footer">VINYL</div>
   <div class="panel-footer">ID</div>
   
   
  </div>
  	<hr>
  		<h4>Visit our Social Media Account:</h4>
        <a href="https://web.facebook.com/gndprints"><img src="images/fblogo.png" alt="facebook" width="50" height="50"></a> <br><br>

    </div>


    <div class="col-sm-8" >

     <div id="menu2" class="panel-heading"><h2>WELCOME TO G&amp;D Printing Solutions </h2> 
     <h3>Welcome <?php echo $_SESSION['username']; ?>!</h3>
    
     </div>

     <p></p>
     <div   class="panel panel-default" id="intro" >

       <h3><strong></strong>G&amp;D Printing Solutions</h3>
       <blockquote>G&amp;D Printing Solutions , offers affordable yet good services of T-Shirt, Tarpaulin, Vinyl, Billboard and many more<br>
       </blockquote>

      </div>

      	  
   </div>
 
    <div class="col-sm-12" >
    	<br>
    	<br>
    	<br>
    </div>
   
  </div>

</div>

<br>

<div class="container-fluid" id="footer">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
    
   		  <h3 class="text-muted credit">ALL RIGHTS RESERVED 2016</h3>
      <p></p>
      <hr>
      <ul class="list-inline center-block">

      </ul>
      
  	</div><!--/col-->
</div><!--/container-->
  


</body>
</html>


</body>
</html>	