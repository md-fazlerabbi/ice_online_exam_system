<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to ICE online exam system</title>
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
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Welcome to ICE online exam system</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/sub.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for test </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/res.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
   
		exit;
		

}


?>
<table width="100%" border="0">
  <tr>
    <td width="75%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor="#052778"><span class="style6"></span></td>
    <td width="45%" bgcolor="#052778"><div align="center" class="style1">User Login </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Welcome to ICE online exam system</h1>
      <span class="style5"><img src="image/nstu.jpg" width="129" height="100"><span class="style7"></span> 
        
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="left" class="style5"><span class="style7">Welcome to ICE online
            exam system. This Site provides Test on ICE courses 
            You need to login for the online exam.</span></p>
      </blockquote>
    </div></td>
    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#2161eb"><div align="center"><span class="style4">New User ? <a href="signup.php">Signup Free</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5"><img src="images/topleft.jpg" width="80" height="90">          </p>
        </div>
    </form></td>
  </tr>
</table>

</body>
</html>
