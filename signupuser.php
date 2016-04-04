<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
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
extract($_POST);
include("database.php");
$rs=mysql_query("select * from user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login to give exam</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";


?>
</body>
</html>

