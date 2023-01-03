<html>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

<?php session_start();
  
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php'; 

include("dbconnection.php");

$user=$_SESSION['user'];



$activation_code = rand(100000,999999);
		
$otp=md5($activation_code);
$upd = "update login set activation_code='$otp' where email='$user'";

		
$res=mysqli_query($con,$upd) or die("query failed".mysqli_error($con));

$msg="<html>
<head>
<style>

h3
{
text-align:center;
}
h2
{
text-align:center;
font-size:26px;
}
p
{
text-align:center;
font-size:16px;
}
h2
{
text-align:center;
font-size:26px;

}
</style>

</head>
<body>
<div class='all'>
<h2>CCSIT JOB PORTAL</p>




<h3>Verify Your Email Address</h3>
</div>
<hr>

<div class='content'>
<p>Verify your email address to finish signing up with CCSIT JOB PORTAL.Below is your verification code:</p>
<br>
<h2>$activation_code</h2>
<p>The verification code is valid for 10 minutes. </p>
</div>

</body>
</html>";




$mail = new PHPMailer(true); 
  
try {
    
			 
    $mail->SMTPDebug = 0;                                        
    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.gmail.com;';                     
    $mail->SMTPAuth   = true;                              
    $mail->Username   = 'ccsitjobportal@gmail.com';                  
    $mail->Password   = 'jobportal@ccsit';                         
    $mail->SMTPSecure = 'tls';                               
    $mail->Port       = 587;   
  
    $mail->setFrom('ccsitjobportal@gmail.com', 'CCSIT');            
    $mail->addAddress($user); 
    $mail->addAddress($user); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = 'Email verification'; 
   $mail->MsgHTML($msg );			
   		 $mail->send(); 
echo "<script>Swal.fire({
  title: 'Suucessfully Resend',
  text: 'Please Check Your E-mail..',
  icon: 'success',
  confirmButtonText: 'Ok!',
  
}).then((result) => {
  if (result.value) {
window.location.href='verify.html'
  }
})
</script>";
		    
} catch (Exception $e) { 
    echo "<script>Swal.fire({
  title: 'Dear User?',
  text: 'Some Error Occured! Please try again later!',
  icon: 'warning',
  confirmButtonText: 'Ok!',
  
}).then((result) => {
  if (result.value) {
window.location.href='verify.html'
  }
})
</script>";

}  
?> 

</body>
</html>