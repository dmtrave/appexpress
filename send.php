<?php
   $to = "info@appexpress.click";
   $subject = "Contact Us";
   $message = '<h1>Send question</h1>
                <p>Your company <b> '.$_POST['username'].'</b></p>
                <p>Your email <b> '.$_POST['Email'].'</b></p>
                <p>Text message <b> '.$_POST['TextHere'].'</b></p>';
   $header = "From:appexpress@somedomain.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   mail($to, $subject, $message, $header);
