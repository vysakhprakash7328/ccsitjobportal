
<html>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

<?php
session_start();
//login.php

include("dbconnection.php");
$otp=$_POST['otp'];
$mail=$_SESSION['user'];

$acti=md5($otp);
$check="select * from login where activation_code='$acti' and email='$mail'";
$result=mysqli_query($con,$check) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($result))
{
header('Location:updatepass.html');
}
else
{
echo "<script>Swal.fire({
  title: 'Dear User?',
  text: 'Your OTP is Incorrect!',
  icon: 'warning',
  confirmButtonText: 'Ok!',
  
}).then((result) => {
  if (result.value) {
window.location.href='verify.html'
  }
})
</script>";

}

mysqli_close($con);
?>

</body>
</html>