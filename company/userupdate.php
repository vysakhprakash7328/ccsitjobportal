
<html_entity_decode>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<?php

include("dbconnection.php");

session_start();
$email=$_SESSION['user'];


$name=$_POST['name'];
$year=$_POST['year'];
$cno=$_POST['cno'];
$address=$_POST['address'];
$location=$_POST['location'];
$licenseno=$_POST['licenseno'];

$ins="update companydetails set name='$name',year='$year',address='$address',location='$location',licenseno='$licenseno' where email='$email'";
$result=mysqli_query($con,$ins) or die("query failed".mysqli_error($con));
echo "<script>Swal.fire({
    title: 'Updated',
    text: 'Successfully Updated your details',
    icon: 'success',
    confirmButtonText: 'Ok!',
    
  }).then((result) => {
    if (result.value) {
  window.location.href='userview.php'
    }
  })
  </script>";


mysqli_close($con);
?>
</html>