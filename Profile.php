<!DOCTYPE html>
<html>
<head>
 <title>User Profile-E-Journal,Papers & Conference Info.</title>
 <link rel="stylesheet" href="SignedInStyle.css">
</head>
<body>
<div id="fileNavigator">	
 <a href="Profile.php" id="PersonalInfo" style="font-weight:bold">ME</a>
 <a href="Journal.php" id="EJournals" style="font-weight:bold">E-Journals</a>
 <a href="Paper.php" id="Papers" style="font-weight:bold">Papers</a>
 <a href="Conference.php" id="Conferences" style="font-weight:bold">Conferences</a>
 <a href="Others.php" id="Others" style="font-weight:bold">Others</a> 
 <a href="displayViewAllPg.php" id="ViewAll" style="font-weight:bold">View All</a>
 <a href="#" id="Favorites" style="font-weight:bold">Favorites</a>
 <a href="#" id="Help" style="font-weight:bold">Help</a>
</div>
<center>
<h2>Change Password</h2>
<form method="post">
<div id="Profile" style="font-size:20px;">
 <label>User_ID</label><br>
 <input type="text" style="width:280px" placeholder="Enter Username" name="Userid"><br>
 <label>Password</label><br>
 <input type="password" placeholder="Enter Password" style="width:280px" name="password" required><br>
 <button type="submit" name="Submit" style="font-size:20px;color:green">Change</button>
</div>
<?php
 require "Connect.php";
 if(isset($_POST['Submit'])) {
  $passwd=$_POST['password'];
  $user=$_POST['Userid'];
  $query="CALL Update_Pwd($user,$passwd) //";
  $result=mysqli_query($conn,$query);
  if(!$result) {
   echo("<script>alert('Unable to Change Password')</script>");
  } else {
   echo("<script>alert('Password Changed')</script>");
  }
 }
?>
</form>
</body>
</html>
