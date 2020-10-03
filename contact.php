<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo= "info@ytriplebmarketing.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from: ".$name.".\n\n".$message;


    


    mail($mailTo,$message,$txt,$headers);
    header("Location: index.php?Your message has been sent!");
}







?>