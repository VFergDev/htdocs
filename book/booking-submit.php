<?php
    if(isset($_POST['submit'])) { 
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "booking@colormehigh.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have an email from ".$name.".\r\n".$mailFrom.".\r\n About ".$subject.".\r\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: booking.html?mailsend");
    }  
?>