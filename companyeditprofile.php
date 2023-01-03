<?php session_start();
?>



<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
           
<!------ Include the above in your HEAD tag ---------->



<style>


body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
#img
{
width: 200px;
height:200px;
padding-left:10px;
padding-right:10px;


}

*{margin: 0;padding:0px}

                .header{
                    width: 100%;
                    background-color: #0d77b6 !important;
                    height: 60px;
                }

                .showLeft{
                    background-color: #0d77b6 !important;
                    border:1px solid #0d77b6 !important;
                    text-shadow: none !important;
                    color:#fff !important;
                    padding:10px;
                }

                .icons li {
                    background: none repeat scroll 0 0 #fff;
                    height: 7px;
                    width: 7px;
                    line-height: 0;
                    list-style: none outside none;
                    margin-right: 15px;
                    margin-top: 3px;
                    vertical-align: top;
                    border-radius:50%;
                    pointer-events: none;
                }

                .btn-left {
                    left: 0.4em;
                }

                .btn-right {
                    right: 0.4em;
                }

                .btn-left, .btn-right {
                    position: absolute;
                    top: 0.24em;
                }

                .dropbtn {
                    background-color: #4CAF50;
                    position: fixed;
                    color: white;
                    font-size: 16px;
                    border: none;
                    cursor: pointer;
                }

                .dropbtn:hover, .dropbtn:focus {
                    background-color: #3e8e41;
                }

                .dropdown {
                    position: absolute;
                    display: inline-block;
                    right: 0.4em;
                }

                .dropdown-content {
                    display: none;
                    position: relative;
                    margin-top: 60px;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    overflow: auto;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown a:hover {background-color: #f1f1f1}

                .show {display:block;}

</style>
<script>
                function changeLanguage(language) {
                    var element = document.getElementById("url");
                    element.value = language;
                    element.innerHTML = language;
                }

                function showDropdown() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches('.dropbtn')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>

</head>
<body>
 <div class="header">

                <!-- three dot menu -->
                <div class="dropdown">
                    <!-- three dots -->
                    <ul class="dropbtn icons btn-right showLeft" onclick="showDropdown()">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- menu -->
                    <div id="myDropdown" class="dropdown-content">
                        <a href="indexcompany.php">Home</a>
                        <a href="companyeditprofile.php">Edit</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <img src="images/businessman.jpg" alt="businessman.jpeg" id="img">
				</div>
<?php 
include("dbconnection.php");
$email=$_SESSION['company'];
$ret="select name,year,address,location,contactno,licenseno from companydetails where email='$email'";
$q=mysqli_query($con,$ret) or die("query failed".mysqli_error($con));
while($row = mysqli_fetch_array($q, MYSQL_ASSOC))
{


				
?>

				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
			<?php echo" {$row['name']} "; ?>
					</div>
					<div class="profile-usertitle-job">
						<?php  echo" $email"; ?>
					</div>
				</div>
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							Location:<?php echo" {$row['location']} "; ?>
							</a>
						</li>
						<li>
							<a href="#">
						phone:	<?php echo" {$row['contactno']} "; ?>
							 </a>
						</li>
						<li>
							<a href="#" target="_blank">
							Address:<?php echo" {$row['address']} "; ?>
								</a>
						</li>
						
					</ul>
				</div>
				<!-- END MENU -->
<?php
 } 
mysqli_close($con);
?>

			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
<h1 align="center">Company Description</h1>
<form action="companyprofileupdate.php" method="post">
Bio:<input type="textarea" name="bio">
<input type="submit" value="save">
</form>
<br>

</div>
		</div>
	</div>
</div>
</body>
</html>