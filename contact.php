<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>t i t l e</title>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">    
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
	  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">	
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Cousine:400,700' rel='stylesheet' type='text/css'>		
<link href='https://fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'> 
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/search.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/pricing.css" />
      <link rel="stylesheet" href="contact.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	</script>
 	
	</head>
	<body>
   
    <div id="page-wrapper">
         <div class="pricingmenu">

				<!-- Header -->
					<header id="header2" class="alt">
						<h1><a href="index.html" style="letter-spacing:2px;"></a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#" class="menuToggle"><span>Menu <font size="3pt;"><i class="fa fa-bars"></i></font></span></a>
									<div id="menu">
										<ul>
											<li><a href="#aboutus">About</a></li>
											<li><a href="#choosingus">Choosing Us</a></li>
                                            <li><a href="#ourportfolio">Portfolio</a></li>
											<li><a href="/pricing">Pricing</a></li>
											<li><a href="#contactsection">Contact Us</a></li>
											
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>
        </div>
           

<br><br><br><center>
     <div class="contactbox"> 
         <div class="contacthead">Contact Us</div>
        <br><br>
        <div class="formspace"> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    <input class="caero" name="name" type="text" placeholder="Name or Phone Number" value="" size="30"><br> 
    <input class="caero" name="email" type="text" placeholder="Your Email" value="" size="30"><br> 
    <textarea class="caero" name="message" placeholder="Leave us a Message" rows="5" cols="30"></textarea><br>
    <input type="submit" class="button" style="width:95%;outline:none;"value="Email Us!"><br><br>

   
       <?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 

    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill the form again.<br>"; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Booking Form"; 
        mail("jnb.writer@gmail.com", $subject, $message, $from); 
        echo "Thank you for sending your request. We will get back to you as soon as possible.<br>"; 
        } 
    }   
?>   

 </form> <br>
        </div> 
        </div> <br> home pricing 

        </center>
        </div>  

        <br><br><br><br>
        

			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/init.js"></script>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </body></html>
                
