<html_entity_decode>
    <head>
    <script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<?php
include("dbconnection.php");

$uname=$_POST['username'];
$pass=$_POST['passwd'];
$passwd=md5($pass);
session_start();
 $_SESSION['user']=$uname;

$ch="select * from companylogin where status='Not_verified' and username='$uname'";
$res=mysqli_query($con,$ch) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($res))
{

    echo "<script>Swal.fire({
        title: 'Dear User?',
        text: 'You are not a verified user now!Please complete next step to complete your profile!',
        icon: 'warning',
        confirmButtonText: 'Ok!',
        
      }).then((result) => {
        if (result.value) {
      window.location.href='resend.php'
        }
      })
      </script>";
      }
else
{
  $chck="select status from companydetails where email='$uname'";
  $rslt=mysqli_query($con,$chck) or die("query failed".mysqli_error($con));
  while($row = mysqli_fetch_array($rslt, MYSQL_ASSOC))
{
$s=$row['status'];
if($s=="0")
  {
    echo "<script>Swal.fire({
      title: 'Dear User?',
      text: 'Please wait,it may take 3 days to verify your profile! You will get an email after the verification!',
      icon: 'warning',
      confirmButtonText: 'Ok!',
      
    }).then((result) => {
      if (result.value) {
    window.location.href='../index.html'
      }
    })
    </script>";
  
  }
  else if($s=="1")
  {  
$check="select * from companylogin where username='$uname' and password='$passwd'";
$result=mysqli_query($con,$check) or die("query failed".mysqli_error($con));
if(mysqli_fetch_array($result))
{
 $_SESSION['company']=$uname;
header('Location:../indexcompany.php');
}
else
{
 echo "<script>Swal.fire({
      title: 'Dear User?',
      text: 'Please wait,it may take 3 days to verify your profile! You will get an email after the verification!',
      icon: 'warning',
      confirmButtonText: 'Ok!',
      
    }).then((result) => {
      if (result.value) {
    window.location.href='../index.html'
      }
    })
    </script>";}}
else
{
echo "<script>Swal.fire({
  title: 'Sorry',
  text: 'Admin blocked your profile!',
  icon: 'warning',
  confirmButtonText: 'Ok!',
  
}).then((result) => {
  if (result.value) {
window.location.href='companylogin.html'
  }
})
</script>";

}

}}
mysqli_close($con);
?>
</html>