
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


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$cno=$_POST['cno'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$skill=$_POST['skill'];
$ugcrs=$_POST['ugcrs'];
$ugclg=$_POST['ugclg'];
$ugucity=$_POST['ugucity'];
$ugmark=$_POST['ugmark'];
$pgcourse=$_POST['pgcrs'];
$pgmark=$_POST['pgmark'];
$lang=$_POST['lang'];



$ins="update userdetails set fname='$fname',lname='$lname',address='$address',cno='$cno',dob='$dob',gender='$gender',ugcourse='$ugcrs',ugcollege='$ugclg',uguniversity='$ugucity',ugmark='$ugmark',pgcourse='$pgcourse',pgmark='$pgmark',skill='$skill',langknown='$lang' where email='$email'";
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