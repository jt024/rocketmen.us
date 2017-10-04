<!-- ***********************************************************
***  Rocketmen.us
***  Group: Unauthorized Access
***********************************************************
*** Purpose: To test php middleware.
***
***********************************************************
*** Date: September 22nd 2017
***********************************************************
*** List of changes with dates. 
*** 1.	22 Sep 2017 	initial creation.
*** 2.	04 Oct 2017 	added link to index.php 
*** 3.
*** 4.
*** 5.
*** 6.
*** 7.
*** 8.
*** 9.
************************************************************-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>We are the Rocket Men!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="brown.css" type="text/css">
	        
</head>
<div class="stars" id="sleft"></div>
<div class="stars" id="sright"></div>
<div class="stars" id="s1left"></div>
<div class="stars" id="s1right"></div>

<body>

<center>
<h1 id="title">Launch Team:
<br>Unauthorzed Access</h1>



</center>

<nav>
	<ul class="menu">
		<li><a style="color:white"; href="index.php">Home</a></li>
	</ul>
</nav>

<div id="content">

<br><br><br><br><br>
<br><br><b>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Major Components</b><br>
<?php
	$mysqli = new mysqli("localhost", "rocketman", "eG3qWxmaPLAmWPTK", "rocket");
	$result = $mysqli->query("Select * FROM `majorComp`");
	while ($row = $result->fetch_assoc()) {
    		//echo $row['ComponentID'].$row['Description']."<br>";
		printf ("%s&nbsp;&nbsp;(%s)<br>\n",$row["ComponentID"],$row["Description"]);
	}
	
?>
<br><br><b>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub Components</b><br>
<?php
	$mysqli = new mysqli("localhost", "rocketman", "eG3qWxmaPLAmWPTK", "rocket");
	$result = $mysqli->query("Select * FROM `subComp`");
	while ($row = $result->fetch_assoc()) {
    		//echo $row['SubComponentID'].$row['Description']."<br>";
		printf ("%s&nbsp;&nbsp;(%s)<br>\n",$row["SubComponentID"],$row["Description"]);
	}
	
?>
<br><br><b>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Raw Materials</b><br>
<?php
	$mysqli = new mysqli("localhost", "rocketman", "eG3qWxmaPLAmWPTK", "rocket");
	$result = $mysqli->query("Select * FROM `rawMaterials`");
	while ($row = $result->fetch_assoc()) {
    		//echo $row['MaterialID'].$row['Description']."<br>";
		printf ("%s&nbsp;&nbsp;(%s)<br>\n",$row["MaterialID"],$row["Description"]);
	}
	
?>


</div>
<div id="footer" class="footer">

</div>	

</body>

</html>
