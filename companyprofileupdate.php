<html>
<head>

 <script src="js/jquery-3.5.1.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<?php
include("dbconnection.php");
$bio=$_POST['bio'];
$update="update companydetails set bio='$bio'";
$q=mysqli_query($con,$update);
 echo "<script>Swal.fire({
        title: 'Dear User?',
        text: 'Details add successfully!',
        icon: 'success',
        confirmButtonText: 'Ok!',
        
      }).then((result) => {
        if (result.value) {
      window.location.href='companyprofile.php'
        }
      })
      </script>";
mysqli_close($con);
?>
</body>
</html>