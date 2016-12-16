<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sending Mailt</title>
</head>

<body>
<?php
  $mail = $_REQUEST['mail'] ;
  $message = $_REQUEST['message'] ;
  $name = $_REQUEST['name'] ;

 mail( "toro.adrian.quiambao@gmail.com", "Feedback Form Results",
    $message, "From: $name by $mail" );
	
?>
<script>
		 
  	window.alert("Thank You for answering the Feedback!");
	if(confirm("Would you like to go back to the home page?") == true){
			document.location.href = "index.html";
	}
	else{
		document.location.href = "fdbck.html";
	}

	
		</script>

</body>
</html>

