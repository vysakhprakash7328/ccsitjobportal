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

$ret="select name,year,contactno,address,location,licenseno from companydetails where email='$email'";
$q=mysqli_query($con,$ret) or die("query failed".mysqli_error($con));
while($row = mysqli_fetch_array($q, MYSQL_ASSOC))
{

?>
<form method="POST" action="userupdate.php">
<div id="header"></div>
<div class="left"></div>
<div class="stuff">
  <br><br>
  <h1>Resume</h1>
  <h2><input type="text" value="<?php echo"{$row['name']}";?>" name="name"></h2>
  <hr />
  <br>
  <p class="head">Company Details</p><br>
 Year: <input type="text" value="<?php echo" {$row['year']}";?>" name="year"><br>
Contact No:<input type="text" value="<?php echo" {$row['contactno']}";?>" name="cno"><br>
Address:<input type="text" value="<?php echo" {$row['address']}";?>" name="address"><br>
Location:<input type="text" value="<?php echo" {$row['location']}";?>" name="location"><br>
License No:<input type="text" value="<?php echo" {$row['licenseno']}";?>" name="licenseno"><br>
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