
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
if($_POST)
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$cno=$_POST['phone'];
$gend=$_POST['gender'];
$add=$_POST['address'];
$dob=$_POST['dob'];
$ugcrs=$_POST['crsug'];
$ugclg=$_POST['clgug'];
$ugucity=$_POST['ucityug'];
$ugmark=$_POST['markug'];
$pgcrs=$_POST['crspg'];
$pgmark=$_POST['markpg'];
$file=$_POST['file'];
$skill=$_POST['skill'];
$lang=$_POST['lang'];
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
         
   

$ins="insert into userdetails values('$email','$fname','$lname','$cno','$gend','$add','$dob','$ugcrs','$ugclg','$ugucity','$ugmark','$pgcrs','$pgmark','$imgContent','$skill','$lang','$status')";
$result=mysqli_query($con,$ins) or die("query failed".mysqli_error($con));
header('Location:userview.php');
}
}
}
mysqli_close($con);
?>
</html>