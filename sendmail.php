<?php
         $to = "adcool.kamle7@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is name ankit , 91213123.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:kamleaditya@yahoo.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
?>