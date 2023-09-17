<?php 
// 
if(isset($_POST['submit'])){
    $to = "sanjubora84@gmail.com"; // this is your Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // this is the sender's Email address
 
   
    $subject = "Contact-Inquiry";
    $message = "Email: " .$from."<br>"."Name: " .$name. "<br>" ."Email: " .$email. "<br>"  . "subject: " .$subject. "<br>"."Message: ". $message;
    $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
  $headers .= "From:" .$from. "\r\n" .
  "Reply-To:sanjubora84@gmail.com" . "\r\n" .
  "X-Mailer: PHP/" . phpversion();
    $success = mail($to,$subject,$message,$headers);
     if( $success == true )  
   {
      echo '<script>alert("Email has been sent successfully. we will contact you shortly.");</script>';
   }
   else
   {
	    echo '<script>alert("Message could not be sent....");</script>';
      
   }
   
    }
    echo '<script>window.location="https://tech-buddy.netlify.app/"</script>';
    
?>