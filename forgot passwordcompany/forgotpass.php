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
$email=$_POST['email'];
$q="SELECT * FROM companylogin WHERE username = '$email'";
$res=mysqli_query($con,$q) or die("query failed".mysqli_error($con));
$_SESSION['user']=$email;
if(mysqli_fetch_array($res))
{

$activation_code = rand(100000,999999);

$otp=md5($activation_code);
		$upd = "update companylogin set activation_code='$otp' where username='$email'";		
$res1=mysqli_query($con,$upd) or die("query failed".mysqli_error($con));


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
<p>To change the password of your account,Please verify the otp below...</p>
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
    $mail->addAddress($email); 
    $mail->addAddress($email); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = 'Email verification'; 
   $mail->MsgHTML($msg );			
   		 $mail->send(); 
            echo "<script>Swal.fire({
  title: 'Hello User',
  text: 'Email send successfully!',
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
window.location.href='forgot.html'
  }
})
</script>";

}}
else
{
     echo "<script>Swal.fire({
  title: 'Sorry!',
  text: 'You are not a verified user!',
  icon: 'warning',
  confirmButtonText: 'Ok!',
  
}).then((result) => {
  if (result.value) {
window.location.href='forgot.html'
  }
})
</script>";
  
} 
?> 
</body>
</html>