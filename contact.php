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


<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?>
  
 <h1 class="contact">contact us</h1><br>
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    <input class="caero" name="name" type="text" placeholder="Phone Number" value="" size="30"/><br> 
    <input class="caero" name="email" type="text" placeholder="Your Email" value="" size="30"/><br> 
    <textarea class="caero" name="message" placeholder="Leave us a Message" rows="5" cols="30"></textarea><br>
    <input type="submit" class="button" style="width:95%;outline:none;"value="Email Us!"/><br><br>

    </form> <br>
    
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\"> the form </a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("Quity1992@cuvox.de", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 
