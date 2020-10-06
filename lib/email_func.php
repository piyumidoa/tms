<?php
// put your code here
require_once '../PHPMailer/class.phpmailer.php';
require_once '../PHPMailer/class.smtp.php';
        
$mail             = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Host     = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->Username   = "rafiyahaseena@gmail.com";  // GMAIL username
$mail->Password   = "072325727111";            // GMAIL password
$mail->From     = "rafiyahaseena@gmail.com";
$mail->SetFrom('rafiyahaseena@gmail.com', 'First Last');
$mail->AddReplyTo("rafiyahaseena@gmail.com","First Last");
?>
