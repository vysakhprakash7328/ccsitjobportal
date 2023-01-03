<html>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<html>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<?php session_start();

include("dbconnection.php");

$otp=$_POST['otp'];
$mail=$_SESSION['user'];
$otpencry=md5($otp);

$check="select * from companylogin where activation_code='$otpencry' and username='$mail'";
$result=mysqli_query($con,$check) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($result))
{
echo "<script>Swal.fire({
  title: 'Succesfully Registered',
  text: 'please complete next step',
  icon: 'success',
  confirmButtonText: 'Ok!',
  
}).then((result) => {
  if (result.value) {
window.location.href='form.html'
  }
})
</script>";
$q="update companylogin set status='verified' where username='$mail'";
$res=mysqli_query($con,$q) or die("query failed".mysqli_error($con));

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