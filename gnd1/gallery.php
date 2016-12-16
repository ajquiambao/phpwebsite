<?php include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>G&amp;D Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-66328577-1', 'auto');
      ga('send', 'pageview');
    </script>
   

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
         <li class="active"><a href="pricesA.php">Prices(Admin)</a></li>
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

<div class = "container">
<br>


  <div class="modalphotos photogrid clearfix">

<div>
<h2> G&amp;D Printing Solutions Products & Services </h2>
<h3>Welcome <?php echo $_SESSION['username']; ?>!</h3>
<hr>
</div>	

      
       <div class="row"> 
            <div class="col-md-4 portfolio-item">
                <a href="#callc">
                    <img class="img-responsive" src="images/callingcards.jpg" alt="callingcards">
                </a>
                <h3>
                   <a href="#callc"> Callingcards</a>
                </h3>
                <p> Business cards can be used as a tiny form of advertising. As such, they should represent the business in both words and design. A well-designed card is is one that the recipient wants to hang onto and one that stands out in the crowd.</p>
            </div>
            <!-- MODALALLLALALA :v-->
            <div id="callc" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>

                       <img class="img-responsive" src="images/callingcards.jpg" alt="callingcards">
                </div>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#broch">
                    <img class="img-responsive" src="images/brochures.jpg" alt="brochures">
                </a>
                <h3>
                    <a href="#broch">Brochures</a>
                </h3>
                <p>Brochures offer range of ideas in terms of designs and decorations. You can place pictures on different folds on a brochure, each representing the information mentioned. Furthermore, you can choose from variety of templates for your brochure designs.</p>
            </div>
             <!-- MODALALLLALALA :v-->
            <div id="broch" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                       <img class="img-responsive" src="images/brochures.jpg" alt="brochures">
                </div>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#cat">
                    <img class="img-responsive" src="images/catalogues.jpg" alt="catalogues">
                </a>
                <h3>
                    <a href="#cat">Catalogues</a>
                </h3>
                <p> Catalogues are portable, aspirational and designed to be picked up repeatedly. While the internet has a role to play in any retail operation, catalogues offer a complete brand-in-the-hand, with every product available at a glance. </p>
            </div>
            <!-- MODALALLLALALA :v-->
            <div id="cat" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/catalogues.jpg" alt="catalogues">
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#fly">
                    <img class="img-responsive" src="images/flyers.jpg" alt="flyers">
                </a>
                <h3>
                    <a href="#fly">Flyers</a>
                </h3>
                <p>low cost and an easy design are the salient features of using flyers in your business. Full color flyer printing takes this advantage to the next level by allowing your flyer to stand out among the advertising modes of your competitors.</p>
            </div>
            <!-- MODALALLLALALA :v-->
            <div id="fly" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/flyers.jpg" alt="flyers">
                </div>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#invi">
                    <img class="img-responsive" src="images/invitations.jpg" alt="invitations">
                </a>
                <h3>
                    <a href="#invi">Invitations</a>
                </h3>
                <p>Getting an elegant letterpress invitation in the mail is a world away from opening an inbox. And inexpensive DIY party invites are far more special for guests than a form email. It elevates even a backyard barbecue to a special occasion.</p>
            </div>
            <!-- MODALALLLALALA :v-->
            <div id="invi" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/invitations.jpg" alt="invitations">
                </div>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#mu">
                    <img class="img-responsive" src="images/mugs.jpg" alt="mugs">
                </a>
                <h3>
                    <a href="#mu">Mugs</a>
                </h3>
                <p>  Personalized gifts are more thoughtful and special than generic gifts. Don’t miss the fantastic opportunity to design and give a custom gift. It’s through personalized gifts that you can display your affections Conclusion</p>
            </div>
            <!-- MODALALLLALALA :v-->
            <div id="mu" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/mugs.jpg" alt="mugs">
                </div>
            </div>
        </div>


           <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#die">
                    <img class="img-responsive" src="images/diecuts.jpg" alt="diecuts">
                </a>
                <h3>
                    <a href="#die">Diecuts</a>
                </h3>
                <p> By utilizing die cuts, you can definitely create marketing pieces that stand out from the crowd. People always receive rectangular marketing pieces, so why not make yours different? With die cuts, companies can take a simple rectangular design and create something that will keep recipients hooked!</p>
            </div>
             <!-- MODALALLLALALA :v-->
            <div id="die" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/diecuts.jpg" alt="diecuts">
                </div>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#idc">
                    <img class="img-responsive" src="images/idcards.jpg" alt="idcards">
                </a>
                <h3>
                    <a href="#idc">Idcards</a>
                </h3>
                <p>The ID cards provides the opportunity of monitoring every person in your company including visitors and employees. </p>
            </div>
             <!-- MODALALLLALALA :v-->
            <div id="idc" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/idcards.jpg" alt="idcards">
                </div>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#ris">
                    <img class="img-responsive" src="images/risograph.jpg" alt="risograph">
                </a>
                <h3>
                    <a href="#ris">Risograph</a>
                </h3>
                <p>Risograph is a similar process to screenprinting, where one colour is printed at a time and a limited colour palette is used. There are hundreds of different ways to prepare your artwork for Risograph printing, but I've found an efficient method that suits my way of working and illustration style, which we'll walk through here.</p>
            </div>
             <!-- MODALALLLALALA :v-->
            <div id="ris" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/risograph.jpg" alt="risograph">
                </div>
            </div>

            
        </div>


        
        
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#souv">
                    <img class="img-responsive" src="images/souvenirs.jpg" alt="souvenirs">
                </a>
                <h3>
                   <a href="#souv"> Souvenirs</a>
                </h3>
                <p> The souvenir is an important component of the tourist experience, with most tourists bringing back mementos and souvenirs as evidence. People like to be reminded of special moments in their lives and to hold evidence of those special moments. However, despite the considerable previous research into souvenirs and purchase behavior, little research exists that investigates the motivations for souvenir purchase. </p>
            </div>

             <!-- MODALALLLALALA :v-->
            <div id="souv" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/souvenirs.jpg" alt="souvenirs">
                </div>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#tarp">
                    <img class="img-responsive" src="images/tarpaulin.jpg" alt="tarpaulin">
                </a>
                <h3>
                    <a href="#tarp">Tarpaulin</a>
                </h3>
                <p>Since tarpaulins are made of polyester or plastic, they weather incredibly well.</p>
            </div>
             <!-- MODALALLLALALA :v-->
            <div id="tarp" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/tarpaulin.jpg" alt="tarpaulin">
                </div>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#fan">
                    <img class="img-responsive" src="images/fans.jpg" alt="fans">
                </a>
                <h3>
                    <a href="#fan">Fans</a>
                </h3>
                <p> is an implement used to induce an airflow for the purpose of cooling or refreshing oneself.</p>
            </div>
             <!-- MODALALLLALALA :v-->
            <div id="fan" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/fans.jpg" alt="fans">

                </div>
            </div>

            
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#boo">
                    <img class="img-responsive" src="images/bookbinds.jpg" alt="bookbinds">
                </a>
                <h3>
                    <a href="#boo">Bookbinds</a>
                </h3>
                <p>Binding make the book and project reports look good. Just imagine what impression it will give to your seniors or professors if you submit your project report as loose sheets without proper binding. Or imagine how shabby will it look to submit stapled sheets of papers as a project report. </p>
            </div>
             <!-- MODALALLLALALA :v-->
            <div id="boo" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/bookbinds.jpg" alt="bookbinds">
                </div>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#pana">
                    <img class="img-responsive" src="images/panaflex.jpg" alt="panaflex">
                </a>
                <h3>
                    <a href="#pana">Panaflex</a>
                </h3>
                <p>PANAFLEX SIGNAGE is an important way to advertise and promote the brand name, its products and services. Outdoor illuminated signs are in trend these days; people prefer illuminated advertising more than the non-illuminated ones. The flex face signs are to be used as company sign boards, shop front signs, vehicle graphics, advertising light boxes, backlit displays etc.</p>
            </div>

             <!-- MODALALLLALALA :v-->
            <div id="pana" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/panaflex.jpg" alt="panaflex">
                </div>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#giv">
                    <img class="img-responsive" src="images/giveaways.jpg" alt="giveaways">
                </a>
                <h3>
                    <a href="#giv">Giveaways</a>
                </h3>
                <p>Promotional giveaways can really help you in attracting customers during trade fairs and for promoting events organized by the company.</p>
            </div>
            <!-- MODALALLLALALA :v-->
            <div id="giv" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/giveaways.jpg" alt="giveaways">
                </div>
            </div>
        </div>

<div class="col-md-4 portfolio-item">
                <a href="#shirt">
                    <img class="img-responsive" src="images/tshirt.jpg" alt="tshirt">
                </a>
                <h3>
                    <a href="#shirt">T-shirt</a>
                </h3>
                <p>Custom t-shirts / custom tees are effective for business marketing campaigns because t-shirts can be utilized as prize offers for customers that purchase your business products and services. Big corporate brands like Pepsi use custom t-shirts for business promotions annually to get buyers excited about the brand in a variety of contests and marketing campaigns.</p>
            </div>
            <!-- MODALALLLALALA :v-->
            <div id="shirt" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/tshirt.jpg" alt="tshirt">
                </div>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#bilbil">
                    <img class="img-responsive" src="images/billboard.jpg" alt="billboard">
                </a>
                <h3>
                    <a href="#bilbil">Billboard</a>
                </h3>
                <p>Since billboards are generally placed along highways and busy streets, you'll be guaranteed that people will see your advertising. </p>
            </div>

            <!-- MODALALLLALALA :v-->
            <div id="bilbil" class="modalDialog">
                <div>   <a href="#close" title="Close" class="close">X</a>
                    <img class="img-responsive" src="images/billboard.jpg" alt="billboard">
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
</div><!--/container-->
  


<script src="_myscript.js"></script>


</div>
</body>
</html>