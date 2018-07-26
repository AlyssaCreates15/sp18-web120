<!DOCTYPE html>
<html lang="en">
<head>
<title>Alyssa's WEB120 Portal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/reCAPTCHA.css" /> 
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php">Alyssa Jung's SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Home</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Alyssa</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        


<div id="contact">
<h2>Contact Alyssa</h2>
 <?php include 'includes/multiple.php';?>
	 <p class="clear-recaptcha"></p>
</div>
    
 
<!-- START Footer -->
<footer>
  <p><small>&copy;<?php echo date("Y");?> <a href="#" target="_blank">Alyssa Jung</a>, All Rights Reserved <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.alyssadom.com%2Fweb120%2Findex.php">Valid HTML</a>  <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.alyssadom.com%2Fweb120%2Findex.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
    
</div>
<!-- END WRAPPER -->

</body>
</html>



