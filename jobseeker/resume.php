<html>
<head>
<style>
* {
  max-width: 700px;
  margin: auto;
}


/*body {
    min-width: 500px;
}*/

div {
  border-radius: 5px;
}

#header {
  height: 40px;
  width: 100%;
  background-color: #ffcccc;
  position: fixed;
  z-index: 1;
}

#title {
  margin-left: 3%;
}

#footer {
  height: 50px;
  width: 100%;
  background-color: #ffcccc;
  clear: both;
  position: relative;
}

.left {
  height: 1000px;
  width: 45px;
  background-color: #e0eeee;
  float: left;
  position: fixed;
}

.right {
  height: 1000px;
  width: 45px;
  background-color: #e0eeee;
  float: right;
  position: inherit;
}

.stuff {
  display: inline-block;
  margin-top: 6px;
  margin-left: 55px;
  width: 75%;
  height: 1000px;
}

p,
li {
  font-family: 'Cormorant Garamond';
}

.head {
  font-size: 20px;
}

#name {
  font-family: Sacramento;
  float: right;
  margin-top: 10px;
  margin-right: 4%;
}

a {
  color: black;
  text-decoration: none;
}

@media only screen and (max-width: 430px) {
  .left,
  .right {
    display: none;
  }
  .stuff {
    width: 100%;
    margin-left: 10px;
  }
}
</style>

</head>

<body>

<?php
include("dbconnection.php");
session_start();
$email=$_SESSION['user'];

$ret="select fname,lname,cno,gender,address,dob,skill,langknown from userdetails where email='$email'";
$q=mysqli_query($con,$ret) or die("query failed".mysqli_error($con));
while($row = mysqli_fetch_array($q, MYSQL_ASSOC))
{

?>
<div id="header"></div>
<div class="left"></div>
<div class="stuff">
  <br><br>
  <h1>Resume</h1>
  <h2><?php echo" {$row['fname']} {$row['lname']}";?></h2>
  <hr />
  <br>
  <p class="head">Personal Details</p>
 Address: <?php echo" {$row['address']}";?>
Contact No:<?php echo" {$row['cno']}";?>
Date of Birth:<?php echo" {$row['dob']}";?>
Gender:<?php echo" {$row['gender']}";?>
  <p class="head">Skills</p>
  <ul>
    <li><?php echo" {$row['skill']}";?></li>
  </ul>
  <p class="head">Education</p>
Graduation  
<ul>
      <li> <?php echo" {$row['ugcourse']}";?> <br>
At <?php echo" {$row['ugcollege']}";?> <br>
Under <?php echo" {$row['uguniversity']}";?><br>
With <?php echo" {$row['ugmark']}";?>%Mark<br>
</li>
Post Graduation
    <li>
<?php echo" {$row['pgcourse']}";?> <br>
At CCSIT <br>
Under Calicut University<br>
With <?php echo" {$row['pgmark']}";?>%Mark<br>
</li>
 
  <p class="head">Languages Known</p>
  <ul>
    <li><?php echo" {$row['langknown']}";?>
</li>
    
  </ul>
<h3>DECLARATION</h3>
<br><p>I hereby declare that all the above information is true to best of my knowledge.</p>
<form method='post' action='useredit.php'>
<input type='submit' value='edit'>
</form>

<a href='../index.html'><button>Submit</button></a>


mysqli_close($con);
?>

</div>
<div class="right"></div>

</body>
</html>