<!DOCTYPE html>
<html>
<head>
 <title>Home-E-Journal,Papers & Conference Info.</title>
 <link rel="stylesheet" href="SignedInStyle.css">
</head>
<body style="background-image:url('Data2.jpg')">
<div id="fileNavigator">	
 <a href="Profile.php" id="PersonalInfo" style="font-weight:bold">ME</a>
 <a href="Journal.php" id="EJournals" style="font-weight:bold">E-Journals</a>
 <a href="Paper.php" id="Papers" style="font-weight:bold">Papers</a>
 <a href="Conference.php" id="Conferences" style="font-weight:bold">Conferences</a>
 <a href="Others.php" id="Others" style="font-weight:bold">Others</a> 
 <a href="SignedIn.php" id="BackHome" style="font-weight:bold">Home</a>
 <a href="Help.html" id="Help" style="font-weight:bold">Help</a>
</div>
<div class="AddNew">
 <h3><center>Add New Resource</h3>
 <div class="tab">
  <button class="tabLinks" onclick="goTo(event,'Journals')" id="defaultResource">Journals</button>
  <button class="tabLinks" onclick="goTo(event,'EPapers')">Papers</button>
  <button class="tabLinks" onclick="goTo(event,'EConferences')">Conferences</button>
  <button class="tabLinks" onclick="goTo(event,'EOthers')">Others</button>
 </div>
<div id="Journals" class="addNew">
 <form class="formStyle" method="post">
    <label>User_ID</label>
    <input type="text" name="user">
    <label>Title</label>
    <input type="text" name="journalTitle" required>
    <label>JID</label>
    <input type="text" name="journalID">
    <label>Publication</label>
    <input type="text" name="journalPublication">
    <label>Field</label>
    <select name="Field">
     <option value="AI01">Artificial Intelligence</option>
     <option value="AL01">Algorithms</option>
     <option value="I01">Internet of Things</option>
    </select><br>
    <button type="reset" class="formReset">Reset</button>
    <button type="submit" class="formSubmit" name="Journal">Submit</button>
 </form> 
 <?php
  require "Connect.php";
  $juserid=$_POST['user'];
  $jtitle=$_POST['journalTitle'];
  $jid=$_POST['journalID'];
  $jpub=$_POST['journalPublication'];
  $jfield=$_POST['Field'];
  $query0="INSERT INTO Journal VALUES('$juserid','$jtitle','$jid','$jpub','$jfield')";
  if(isset($_POST['Journal'])) {
   $result0=mysqli_query($conn,$query0);
   if(!$result0) {
    echo("<script>alert('Unable to Submit')</script>");
   } else {
    echo("<script>alert('Journal Info. updated')</script>");
   }
  }
 ?>
</div>
<div id="EPapers" class="addNew">
 <form method="post">
  <label>UserID</label>
  <input type="text" name="user">
  <label>Title</label>
  <input type="text" name="paperTitle" required>
  <label>Author</label>
  <input type="text" name="paperAuthor" required>
  <label>PID</label>
  <input type="text" name="paperID">
  <label>JID</label>
  <input type="text" name="journalID">
  <label>Field</label>
  <select name="Field">
   <option value="AI01">Artificial Intelligence</option>
   <option value="AL01">Algorithms</option>
   <option value="I01">Internet of Things</option>
  </select><br>
  <label name="status">Status</label>
  <select>
   <option value="Ongoing">Ongoing</option>
   <option value="Complete">Complete</option>
  </select><br>
  <label>Date</label>
  <input type="date" name="Date" value="" style="width:15%">
  <label>URL</label>
  <input type="url" name="url"><br>
  <button type="reset" class="formReset">Reset</button>
  <button type="submit" class="formSubmit" name="paperSub">Submit</button>
 </form>
 <?php
  require "Connect.php";
  $puserid=$_POST['user'];
  $ptitle=$_POST['paperTitle'];
  $pauthor=$_POST['paperAuthor'];
  $pid=$_POST['paperID'];
  $jid=$_POST['journalID'];
  $pfield=$_POST['Field'];
  $pstat=$_POST['status'];
  $pdate=$_POST['Date'];
  $purl=$_POST['url'];
  if(isset($_POST['paperSub'])) {
   $query1 = "INSERT INTO Paper VALUES ('$puserid','$ptitle','$pauthor','$pid','$jid','$pfield','$pstat','$pdate','$purl')";
   $result1=mysqli_query($conn,$query1);
   if(!$result1) {
     echo("<script>alert('Unable to Submit')</script>");
   } else {
     echo("<script>alert('Paper Info. updated')</script>");
   }
 }
 ?>
</div>
<div id="EConferences" class="addNew">
 <form method="post">
  <label>UserID</label>
  <input type="text" name="user">
  <label>Name</label>
  <input type="text" name="conferenceName" required>
  <label>CID</label>
  <input type="text" name="conferenceID">
  <label>Location</label>
  <input type ="text" name="conLocation">
  <label>Date</label>
  <input type=date name="conDate">
  <label>URL</label>
  <input type="url" name="pamphletURL"><br>
  <button type="reset" class="formReset">Reset</button>
  <button type="submit" class="formSubmit" name="conSub">Submit</button>
 </form>
 <?php
  require "Connect.php";
  $cuserid=$_POST['user'];
  $ctitle=$_POST['conferenceName'];
  $cid=$_POST['conferenceID'];
  $cLoc=$_POST['conLocation'];
  $cdate=$_POST['conDate'];
  $curl=$_POST['pamphletURL'];
  if(isset($_POST['conSub'])) {
   $query2="INSERT INTO Conferences VALUES ('$cuserid','$ctitle','$cid','$cLoc','$cdate','$curl')";
   $result2=mysqli_query($conn,$query2);
   if(!$result2) {
     echo("<script>alert('Unable to Submit')</script>");
   } else {
     echo("<script>alert('Conference Info. updated')</script>");
   }
 }
 ?>
</div>
<div id="EOthers" class="addNew">
 <form method="post">
    <label>UserID</label>
    <input type="text" name="user">
    <label>Title</label>
    <input type="text" name="othersTitle" required>
    <label>OID</label>
    <input type="text" name="othersID">
    <label>URL</label>
    <input type="url" name="othersURL"><br>
    <label>Field</label>
    <select name="othersField">
     <option value="AI01">Artificial Intelligence</option>
     <option value="AL01">Algorithms</option>
     <option value="I01">Internet of Things</option>
    </select><br>
    <button type="reset" class="formReset">Reset</button>
    <button type="submit" class="formSubmit" name="othSub">Submit</button>
 </form>
 <?php
  require "Connect.php";
  $ouserid=$_POST['user'];
  $otitle=$_POST['othersTitle'];
  $oid=$_POST['othersID'];
  $ourl=$_POST['othersURL'];
  $ofield=$_POST['othersField'];
  if(isset($_POST['othSub'])) {
   $query3="INSERT INTO Others VALUES ('$ouserid','$otitle','$oid','$ofield','$ourl')";
   $result3=mysqli_query($conn,$query3);
   if(!$result3) {
     echo("<script>alert('Unable to Submit')</script>");
   } else {
     echo("<script>alert('Info. updated')</script>");
   }
 }
 ?>
</div>
<script>
 function goTo(transitionEvent,resouceType) {
    var i, formContent, tabLinks;
    formContent = document.getElementsByClassName("addNew");
    for (i = 0; i < formContent.length; i++) {
        formContent[i].style.display = "none";
    }
    tabLinks = document.getElementsByClassName("tabLinks");
    for (i = 0; i < tabLinks.length; i++) {
        tabLinks[i].className = tabLinks[i].className.replace(" active", "");
    }
    document.getElementById(resouceType).style.display = "block";
    transitionEvent.currentTarget.className += " active";
 }
 document.getElementById("defaultResource").click();
 </script>
</body>
</html>
