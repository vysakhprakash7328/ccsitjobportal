<?php session_start();
?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Curriculum Vitae</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
           </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/businessman.jpg" alt="Image"/></a></div>
<?php 
include("dbconnection.php");
$mail=$_SESSION['company'];
$ret1="select name from companydetails where email='$mail'";
$q1=mysqli_query($con,$ret1) or die("query failed".mysqli_error($con));
while($row = mysqli_fetch_array($q1, MYSQL_ASSOC))
{

echo"
          <div class='h2 title'>{$row['name']}</div>
";
}
?>

<?php 
include("dbconnection.php");
$mail=$_SESSION['company'];
$post=$_SESSION['post'];
$ret="select post,qualification,basicsalary,experience,interviewdate,interviewtime,interviewlocation from advertisement where companyemail='$mail' and post='$post'";
$q=mysqli_query($con,$ret) or die("query failed".mysqli_error($con));

while($row = mysqli_fetch_array($q, MYSQL_ASSOC))
{

?>
          <p class="category text-white"><?php echo"{$row['post']}"; ?></p>

        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title"><?php echo"{$row['post']}"; ?></div>
            <p>Basic Salry:<?php echo"{$row['basicsalary']}"; ?><br>
	Experience:<?php echo"{$row['experience']}"; ?><br>
	Interview Date:<?php echo"{$row['interviewdate']}"; ?><br>
	Interview Time:<?php echo"{$row['interviewtime']}"; ?><br>
	Interview Location:<?php echo"{$row['interviewlocation']}"; ?><br>
</p>
<?php 
}
mysqli_close($con);
?>            
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
<?php 
include("dbconnection.php");
$mail=$_SESSION['company'];
$ret1="select year,address,location,contactno,licenseno from companydetails where email='$mail'";
$q1=mysqli_query($con,$ret1) or die("query failed".mysqli_error($con));
while($row = mysqli_fetch_array($q1, MYSQL_ASSOC))
{
?>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Year:</strong></div>
              <div class="col-sm-8"><?php echo"{$row['year']}"; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8"><?php echo"{$row['address']}"; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Location:</strong></div>
              <div class="col-sm-8"><?php echo"{$row['location']}"; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Contact No:</strong></div>
              <div class="col-sm-8"><?php echo"{$row['contactno']}"; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">License No:</strong></div>
              <div class="col-sm-8"><?php echo"{$row['licenseno']}"; ?></div>
            </div>
<?php 
}
mysqli_close($con);
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>