
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
$cno=$_POST['cno'];
$add=$_POST['address'];
$dob=$_POST['dob'];
$gend=$_POST['gender'];
$marstatus=$_POST['marital_status'];
$sslcyr=$_POST['sslcyear'];
$sslcmark=$_POST['sslcmark'];
$sslcboard=$_POST['sslcboard'];
$sslcreg=$_POST['sslcregno'];
$plustwoyr=$_POST['plustwoyear'];
$plustwomark=$_POST['plustwomark'];
$plustwoboard=$_POST['plustwoboard'];
$plustworeg=$_POST['plustworegno'];
$degreeyr=$_POST['degreeyear'];
$degreemark=$_POST['degreemark'];
$degreeboard=$_POST['degreeboard'];
$degreereg=$_POST['degreeregno'];
$pgyr=$_POST['pgyear'];
$pgmark=$_POST['pgmark'];
$pgboard=$_POST['pgboard'];
$pgreg=$_POST['pgregno'];

$ins="insert into userdetails values('$email','$name','$cno','$add','$dob','$gend','$marstatus','$sslcyr','$sslcmark','$sslcboard','$sslcreg','$plustwoyr','$plustwomark','$plustwoboard','$plustworeg','$degreeyr','$degreemark','$degreeboard','$degreereg','$pgyr','$pgmark','$pgboard','$pgreg')";
$result=mysqli_query($con,$ins) or die("query failed".mysqli_error($con));
header('Location:userview.php');

mysqli_close($con);
?>
</html>