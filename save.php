<?php
include("conn.php");
$p1=$_REQUEST["firstname"];
$p2=$_REQUEST["lastname"];
$p3=$_REQUEST["e"];
$p4=$_REQUEST["m"];
mysql_query("insert into info values('$p1','$p2','$p3','$p4')");
?>
<html>
<body bgcolor="cadetblue">
<center>
<br><br><br><br><br><br><br><br>
<font size="40" color="green">
Successfully Commented<br><br>
<a href="index.html">Click to Return</a>
</center>
</font>
</body>
</html>
