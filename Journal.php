<!DOCTYPE html>
<html>
<head>
<title>Journals</title>
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
$result = mysqli_query($conn,"SELECT * FROM Journal");
echo "<table border='1' cell-padding='2'>
<tr>
<th>JID</th>
<th>Title</th>
<th>Publication</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Jid'] . "</td>";
  echo "<td>" . $row['Title'] . "</td>";
  echo "<td>" . $row['Publication'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
<div id="navigation" class="sideNavigation">
 <a href="javascript:void(0)" class="close" onclick="closeNavigation()">&times;</a>
 <a href="Profile.php" style="font-weight:bold">ME</a>
 <a href="Journal.php" style="font-weight:bold">E-Journals</a>
 <a href="Paper.php" style="font-weight:bold">Papers</a>
 <a href="Conference.php" style="font-weight:bold">Conferences</a>
 <a href="Others.php" style="font-weight:bold">Others</a> 
 <a href="SignedIn" style="font-weight:bold">Home</a>
 <a href="Help.html" style="font-weight:bold">Help</a>
</div>
</body>
</html>
