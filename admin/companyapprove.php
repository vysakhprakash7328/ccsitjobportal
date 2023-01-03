<?php session_start();
?>

<html_entity_decode>
    <head>
    <script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
include("dbconnection.php");
$email=$_SESSION['company'];
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php'; 

if($_POST)
{
  

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




<h3>Profile Verified Successfully</h3>
</div>
<hr>

<div class='content'>
<p>Admin verified your profile successfully and till now you will be a verified user of CCSIT JOBPORTAL.Login to the website to see what you can do next</p>
<br>

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
    $mail->Subject = 'Account Verification'; 
   $mail->MsgHTML($msg );			
   		 $mail->send(); 
include("dbconnection.php");		    

$update="update companydetails set status='1' where email='$email'";
$u=mysqli_query($con,$update);
  echo "<script>Swal.fire({
        title: 'Dear User?',
        text: 'Successfully Approved!',
        icon: 'success',
        confirmButtonText: 'Ok!',
        
      }).then((result) => {
        if (result.value) {
      window.location.href='companydatatables.php'
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
window.location.href='companypro.php'
  }
})
</script>";

}
}
mysqli_close($con);


?>

</body>
</html>