<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="ESprofilecss.css" rel="stylesheet" type="text/css">
</head>
<center>
<div id="maindiv">
<div id="headerdiv"><label style="position:relative; color:#FFFFFF; top:16px; font-size:24px"><b>Agent Profile</b></label></div>
<div id="bodydiv">
<table cellpadding="0" cellspacing="0" height="550" width="1250">
<tr>
<td width="300">
<div id="table1">
<table cellpadding="0" cellspacing="0" height="290" width="300">
<tr><td height="40"></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESmainwebpage.php" style="position:relative; left:103px; top:10px">Home</a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="#" style="position:relative; left:103px; top:10px">Edit Profile</a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESsearchCaller.php" style="position:relative; left:103px; top:10px">Search Caller</a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESmainwebpageAboutus.php" style="position:relative; left:103px; top:10px">About us</a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
<tr><td><div id="table1a"><a href="ESAgentlogout.php" style="position:relative; left:103px; top:10px">logout</a></div></td></tr>
<tr><td><div id="table2a"></div></td></tr>
</table>
</div>
</td>
<td width="950">
<?php
session_start();
$a1=$_SESSION['emrid'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die("could not connect to server".mysql_error());
}
mysql_select_db("myphpproject",$con);
$res=mysql_query("select *from createid where AgentID='$a1'");
if($row=mysql_fetch_array($res))
{
?>
<div id="table2">
<table height="550" width="950">
<tr><td width="250"></td><td><b>Agent ID</b></td><td><font color="#999999"><?php echo $row['AgentID']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Name</b></td><td><font color="#999999"><?php echo $row['Name']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Phone No</b></td><td><font color="#999999"><?php echo $row['PhoneNo']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Age</b></td><td><font color="#999999"><?php echo $row['Age']; ?></font></td><td></td></tr>
<tr><td></td><td><b>LoginID</b></td><td><font color="#999999"><?php echo $row['LoginID']; ?></font></td><td></td></tr>
<tr><td></td><td><b>Password</b></td><td><font color="#999999"><?php echo $row['password']; ?></font></td><td></td></tr>
</table>
</div>
<?php
}
?>
</td>
</tr>
</table>
</div>
<div id="footerdiv">
<table cellpadding="0" cellspacing="0" height="305" width="1400">
<tr>
<td><div id="footert1">
<table height="220" width="350">
<tr><td height="60"><b style="position:relative; left:55px; ">MENU 1</b></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 1</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 2</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 3</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 4</label></a></td></tr>
</table>
</div></td>
<td><div id="footert2">
<table height="220" width="350">
<tr><td height="60"><b style="position:relative; left:55px; ">MENU 2</b></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 1</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 2</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 3</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 4</label></a></td></tr>
</table>
</div></td>
<td><div id="footert3">
<table height="220" width="350">
<tr><td height="60"><b style="position:relative; left:55px; ">MENU 3</b></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 1</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 2</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 3</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 4</label></a></td></tr>
</table>
</div></td>
<td><div id="footert4">
<table height="220" width="350">
<tr><td height="60"><b style="position:relative; left:55px; ">MENU 4</b></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 1</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 2</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 3</label></a></td></tr>
<tr><td><a href="#" ><label style="position:relative; left:55px; ">Product 4</label></a></td></tr>
</table>
</div></td>
</tr>
</table>
</div>
</div>
</div>
</center>
<body>
</body>
</html>