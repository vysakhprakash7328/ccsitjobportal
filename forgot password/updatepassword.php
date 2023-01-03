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
$pass=$_POST['password'];
$mail=$_SESSION['user'];
$password=md5($pass);
$update="update login set password='$password' where email='$mail'";
$result=mysqli_query($con,$update) or die("query failed".mysqli_error($con));
echo "<script>Swal.fire({
  title: 'Congratz',
  text: 'Password Updated Successfully!',
  icon: 'success',
  confirmButtonText: 'Ok!',
  
}).then((result) => {
  if (result.value) {
window.location.href='../jobseeker/jobseekerlogin.html'
  }
})
</script>";


mysqli_close($con);
?>

</body>
</html>