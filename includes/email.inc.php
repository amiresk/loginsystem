<?php

   
         $to = "amiresg@gmx.net";
         $subject = "Registerd";
         
         $message = "<b>You are register</b>";
         $message .= "<h1>Thank you!!</h1>";
         
         $header = "From:amiresg@gmx.de \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
?>

