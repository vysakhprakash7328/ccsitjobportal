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
.button {
  background-color:#008CBA; 
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

</head>

<body>

<?php
include("dbconnection.php");
session_start();
$email=$_SESSION['user'];

$ret="select fname,lname,cno,gender,address,ugcourse,ugcollege,uguniversity,ugmark,pgcourse,pgmark,dob,skill,langknown from userdetails where email='$email'";
$q=mysqli_query($con,$ret) or die("query failed".mysqli_error($con));
while($row = mysqli_fetch_array($q, MYSQL_ASSOC))
{

?>
<div id="header"></div>
<div class="left"></div>
<div class="stuff">
  <br><br>
<form method='post' action='userupdate.php'>
  <h1>Resume</h1>
  <h2><input type="text" value="<?php echo" {$row['fname']}";?>" name="fname"> <input type="text" value="<?php echo"{$row['lname']}";?>" name="lname"></h2>
  <hr />
  <br>
  <p class="head">Personal Details</p>
 Address: <input type="text" value="<?php echo" {$row['address']}";?>" name="address">
Contact No:<input type="text" value="<?php echo" {$row['cno']}";?>" name="cno">
Date of Birth:<input type="text" value="<?php echo" {$row['dob']}";?>" name="dob">
Gender:<input type="text" value="<?php echo" {$row['gender']}";?>" name="gender">
  <p class="head">Skills</p>
  <ul>
    <li><input type="text" value="<?php echo" {$row['skill']}";?>" name="skill"></li>
  </ul>
  <p class="head">Education</p>
Graduation  
<ul>
      <li> <input type="text" value="<?php echo" {$row['ugcourse']}";?> " name="ugcrs"><br>
At <input type="text" value="<?php echo" {$row['ugcollege']}";?> " name="ugclg"><br>
Under<input type="text" value=" <?php echo" {$row['uguniversity']}";?>" name="ugucity"><br>
With <input type="text" value="<?php echo" {$row['ugmark']}";?>" name="ugmark">%Mark<br>
</li>
Post Graduation
    <li>
<input type="text" value="<?php echo" {$row['pgcourse']}";?>" name="pgcrs"> <br>
At CCSIT <br>
Under Calicut University<br>
With <input type="text" value="<?php echo" {$row['pgmark']}";?>" name="pgmark">%Mark<br>
</li>
 
  <p class="head">Languages Known</p>
  <ul>
    <li><input type="text" value="<?php echo" {$row['langknown']}";?>" name="lang">
</li>
    
  </ul>
<h3>DECLARATION</h3>
<br><p>I hereby declare that all the above information is true to best of my knowledge.</p>

<input type='submit' value='save' class="button">
</form>



<?php
}
mysqli_close($con);
?>

</div>
<div class="right"></div>

</body>
</html>