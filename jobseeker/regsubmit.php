<html>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<?php 
  
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php'; 
include("dbconnection.php");
 $uname=$_POST['uname'];
 $password=$_POST['password'];
if($_POST["uname"])
{
session_start();
$_SESSION['user']=$uname;
$pass=md5($password);
$q="SELECT * FROM login 
	WHERE email = '$uname'";
$res=mysqli_query($con,$q) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($res))
{

echo "<script>Swal.fire({
  title: 'Dear User?',
  text: 'E-mail id already exist!',
  icon: 'warning',
  confirmButtonText: 'Ok!',
  
}).then((result) => {
  if (result.value) {
window.location.href='jobseekerlogin.html'
  }
})
</script>";


}	
else
{
$activation_code = rand(100000,999999);
		
$otp=md5($activation_code);


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
    $mail->addAddress($uname); 
    $mail->addAddress($uname); 
       
    $mail->isHTML(true);                                   
    $mail->Subject = 'Email verification'; 
   $mail->MsgHTML($msg );			
   		 $mail->send(); 
include("dbconnection.php");		    
header('Location:verify.html');
$ins = "INSERT INTO login(email, password, activation_code) VALUES ('$uname', '$pass', '$otp')";		
$res=mysqli_query($con,$ins) or die("query failed".mysqli_error($con));

} catch (Exception $e) { 
    echo "<script>Swal.fire({
  title: 'Dear User?',
  text: 'Some Error Occured! Please try again later!',
  icon: 'warning',
  confirmButtonText: 'Ok!',
  
}).then((result) => {
  if (result.value) {
window.location.href='jobseekerlogin.html'
  }
})
</script>";


 
}} 
}  
?> 
</body>
</html>