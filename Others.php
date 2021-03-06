<!DOCTYPE html>
<html>
<head>
<title>Others</title>
<link rel="stylesheet" href ="ResourceStyle.css">
<script src="ResourceScript.js"></script>
</head>
<body>
<div class="container" onclick="iconChangeOpen(this)" ondblclick="iconChangeClose(this)" style="display:auto">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
<?php
require "Connect.php";
$result = mysqli_query($conn,"SELECT * FROM Other");
echo "<table border='1' cell-padding='2'>
 <tr>
    <th>UserID</th>
    <th>Title</th>
    <th>OID</th>
    <th>FID</th>
    <th>URL</th>
  </tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Userid'] . "</td>";
  echo "<td>" . $row['Title'] . "</td>";
  echo "<td>" . $row['Oid'] . "</td>";
  echo "<td>" . $row['Fid'] . "</td>";
  echo "<td>" . $row['URL'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
<div id="navigation" class="sideNavigation">
 <a href="javascript:void(0)" class="close" onclick="closeNavigation()">&times;</a>
 <a href="Profile.php" id="PersonalInfo" style="font-weight:bold">ME</a>
 <a href="Journal.php" id="EJournals" style="font-weight:bold">E-Journals</a>
 <a href="Paper.php" id="Papers" style="font-weight:bold">Papers</a>
 <a href="Conference.php" id="Conferences" style="font-weight:bold">Conferences</a>
 <a href="Others.php" id="Others" style="font-weight:bold">Others</a> 
 <a href="SignedIn.php" id="BackHome" style="font-weight:bold">Home</a>
 <a href="Help.html" style="font-weight:bold">Help</a>
</div>
</body>
</html>
