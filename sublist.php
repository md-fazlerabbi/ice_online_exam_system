<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online MCQ exam - Subject List</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="test.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="bootstrap.min.css"  type="text/css"  />
<link rel="stylesheet" href="font-awesome"  type="text/css"  />
<link rel="stylesheet" href="custom-bootstrap.css"  type="text/css"  />
<link rel="stylesheet" href="main.css"   type="text/css"  />
<link rel="stylesheet" href="responsive.css"  type="text/css"  />
<link rel="stylesheet" href="style.css"  type="text/css"  />
</head>
<body>
<?php
include("header.php");
include("database.php");
echo "<h2 class=head1> Please select any subject </h2>";
$rs=mysql_query("select * from subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
</body>
</html>
