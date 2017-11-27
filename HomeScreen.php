<!DOCTYPE html>
<html>
<head>
 <title> E-Journal, Papers & Conference Info. </title>
 <link rel="stylesheet" href="HomeScreenStyle.css">
 <script src="HomeScreenScript.js"></script>
</head>
<body style="background-image:url('WhiteBackground2.jpg')">
<center>
 <h1 style="font-size:60px"> Hey There! </h1>
 <h2 style="font-family:Georgia,Serif;font-style:italic"> SignIn to use this application </h2>
 <h2> No account? SignUp below </h2>
<button onclick="button1Click()" class="button1" style="width:auto"> SignIn </button>
</center>
<div id="id1" class="SignInForm">
 <span onclick="button1Close()" class="closex" title="Close Form">X</span>
 <form class="SignInFormDetails AnimatedForm" method="post">
  <h2><center>SignIn Form</h2>
  <div class="container">
   <label><b>User_ID</b></label>
   <input type="text" placeholder="Enter Username" name="Userid" required>
   <label><b>Password</b></label>
   <input type="password" placeholder="Enter Password" name="Password" required>
   <button type="submit" style="background-color:green;font-size:20px" name='SignIn'>SignIn</button>
   <input type="checkbox" checked="check"> Remember Me
  </div>
  <div class="container" style="background-color:white">
   <button type="button" onclick="button1Close()" class="cancelButton">Cancel</button>
   <span class="passwordRecovery"> <a href="PasswordRecovery.php">Forgot password!</a></span>
  </div>
 </form>
<?php
 require 'Connect.php';
 if(isset($_POST['SignIn'])) {
  $userID=$_POST['Userid'];
  $passwd=$_POST['Password'];
  $query0="SELECT * FROM USER WHERE Userid='$userID' AND Password='$passwd'";
  $result0=mysqli_query($conn,$query0);
  if(mysqli_num_rows($result0)==1) {
   echo("<script>window.open('SignedIn.php','_self');alert('Successfully Logged In')</script>");
 } else {
  echo("<script>alert('Incorrect User ID or Password')</script>");
 }
}
mysqli_close($con);
?>
</div>
<center>
 <button onclick="button2Click()" class="button1" style="width:auto"> SignUp </button>
</center>
<div id="id2" class="SignUpForm">
 <span onclick="button2Close()" class="closex" title="Close Form">X</span>
 <form class="SignInFormDetails AnimatedForm" method="post">
  <h2><center>SignUp Form</h2>
   <div class="container">
    <label><b>User_ID</b></label>
    <input type="text" placeholder="Enter Username" name="User_id" required>
    <label><b>E-mail</b></label>
    <input type="email" placeholder="Enter E-mail" name="Email" required>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Enter Password again" name="rePassword" required>
    <p>By creating an account you agree to the <a href="TermsConditions.html">Terms & Conditions</a></p>
   </div>
   <div>
    <button type="button" onclick="button2Close()" class="cancelButton1">Cancel</button>
    <button type="submit" class="signupButton" name="SignUp">SignUp</button>
   </div>
 </div>
 </form>
 <?php
 require 'Connect.php';
 if(isset($_POST['SignUp'])) {
  $userID=$_POST['User_id'];
  $email=$_POST['Email'];
  $passwd=$_POST['password'];
  $repwd=$_POST['rePassword'];
  $query1="SELECT * FROM USER WHERE Userid='$userID'";
  $query2="SELECT * FROM USER WHERE Email='$email'";
  $query3="INSERT INTO USER(Userid,Email,Password) VALUES('$userID','$email','$passwd')";
  $result1=mysqli_query($conn,$query1);
  $result2=mysqli_query($conn,$query2);
  if($result1) {
   $result3=mysqli_query($conn,$query3);
   if($result3) {
    echo("<script>alert('Successfully Registered')</script>");
   } else {
    echo("<script>alert('Registration Failed')</script>");
   }
  } else {
   echo("<script>alert('User already registered')</script>");
  }
 }
 mysqli_close($conn);
?>
</div>
</body>
</html>
