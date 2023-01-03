
<html_entity_decode>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<?php

include("dbconnection.php");

session_start();
$email=$_SESSION['company'];
$post=$_POST['post'];
$qlfction=$_POST['qualification'];
$salary=$_POST['salary'];
$experience=$_POST['experience'];
$intdate=$_POST['intdate'];
$inttime=$_POST['inttime'];
$intloc=$_POST['intlocation'];

$ins="insert into advertisement(companyemail,post,qualification,basicsalary,experience,interviewdate,interviewtime,interviewlocation) values('$email','$post','$qlfction','$salary','$experience','$intdate','$inttime','$intloc')";
$result=mysqli_query($con,$ins) or die("query failed".mysqli_error($con));
header('Location:companyprofile.php');

mysqli_close($con);
?>
</html>