
<html_entity_decode>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<?php

include("dbconnection.php");
if($_POST)
{
session_start();
$email=$_SESSION['user'];
$cname=$_POST['cmpname'];
$year=$_POST['year'];
$address=$_POST['address'];
$location=$_POST['location'];
$cno=$_POST['cno'];
$licno=$_POST['licenseno'];
$file=$_POST['file'];
$status="0";
if(!empty($_FILES["file"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["file"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['file']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
 
$ins="insert into companydetails(email,name,year,address,location,contactno,licenseno,file,status) values('$email','$cname','$year','$address','$location','$cno','$licno','$imgContent','$status')";
$result=mysqli_query($con,$ins) or die("query failed".mysqli_error($con));
header('Location:userview.php');
}
}
}
mysqli_close($con);
?>
</html>