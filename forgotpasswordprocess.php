<?php 
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
extract($_POST);
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
$o = new model();
$v = new validation();
if (isset($btn)) {
trim($username);
$username = mysqli_real_escape_string($conn,$username);
$str = "select * from  user_master where ( username='$username' or email = '$username')";
$result = mysqli_query($conn,$str);
if (mysqli_num_rows($result)==1) {
	

$data = mysqli_fetch_array($result);
	$generator = "1357902468"; 
	$ans = ""; 
	for ($i = 1; $i <= 6; $i++) { 
		$ans .= substr($generator, (rand()%(strlen($generator))), 1); 
	}  // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'yatramajestic@gmail.com';                 // SMTP username
    $mail->Password = 'majesticyatra123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // enablesble TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('yatramajestic@gmail.com', 'Majestic Yatra');
    $em = $data['email'];
    $nm = $data['u_name'];
    $mail->addAddress("$em", "$nm");     // Add a recipient
        
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Forgot Password OTP';
    $mail->Body    = "Hello $nm, Your OTP for Majestic Yatra is $ans";
    $mail->AltBody = "Hello $nm, Your OTP for Majestic Yatra is $ans";
    $mail->send();
    echo 'Message has been sent';
    $_SESSION['otp']= "$ans";
    $_SESSION['uid']=$data['u_id'];
    $_SESSION['name']=$data['u_name'];
    $_SESSION['email']= $data['email'];
    header("location:otpinput.php"); 
    exit();
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}
else {
	$_SESSION['loginerror'] = "Data doesn't exist";
		header("location:forgotpassword.php"); 
}
}
else {
    header("location:forgotpassword.php"); 
}
?>