<?php
$detect=preg_match('/.php/',$_SERVER['REQUEST_URI']);
if($detect) {exit("Direct access not permitted.");}
require_once("config.php");
	if(isset($_POST["user"]) AND isset($_POST["pass"])){
	SQL;
	$user=$_POST["user"];
	$pass=md5($_POST["pass"]);
	$login=mysql_query("SELECT * FROM ".TL2." WHERE user='$user' AND pass='$pass'");
	$ada=mysql_num_rows($login);
	$data=mysql_fetch_array($login);
	if ($ada>0){
		session_start();
		$_SESSION['username']=$data["user"];
		$_SESSION['password']=$data["pass"];
		header("location:admin");
	}
		echo"<p>&nbsp;<p>&nbsp;<p>&nbsp;";
	} else {
		echo"<p>&nbsp;<p>&nbsp;<p>&nbsp;";
	}
?>
<html>
<head>
<title>..::: Login Administration :::..</title>
<style>
	.s1 {color:#FFF !important; font-weight:bold;}
	.s5 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;}
	.s6 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;font-weight:bold;}
	a {text-decoration:none;}
	a:hover{font-weight:bold}
</style>
</head>
<body>
<form method="post" action="login">
	<table width="308" style="border:1px solid #999;" align="center" cellpadding="1" cellspacing="0">
		<tr>
			<td height="30" colspan="3" bgcolor="#0000CC">
				<div align="center" class="s1 s5">Login Administrator : </div>
			</td>
		</tr>
		<tr>
			<td width="123" height="35" bgcolor="#FFF">
				<div align="right" class="s5">Username :</div>
			</td>
			<td width="8" bgcolor="#FFF">&nbsp;
			</td>
			<td width="162" bgcolor="#FFF">
				<span class="s5">
					<input type="text" name="user">
				</span>
			</td>
		</tr>
		<tr>
			<td height="29" bgcolor="#FFF">
				<div align="right" class="s5">Password :</div>
			</td>
			<td height="29" bgcolor="#FFF">&nbsp;
			</td>
			<td bgcolor="#FFF">
				<span class="s5">
					<input type="password" name="pass">
				</span>
			</td>
		</tr>
		<tr>
			<td height="36" bgcolor="#FFF">&nbsp;
			</td>
			<td bgcolor="#FFF">&nbsp;
			</td>
			<td bgcolor="#FFF">
				<span class="s5">
					<input type="submit" name="submit" value="Submit">
				</span>
			</td>
		</tr>
		<tr>
			<td height="30" colspan="3" bgcolor="#0000CC">
				<div align="center" class="s1 s5">Secure Admin</div>
			</td>
		</tr>
	</table>
</form>
</body>
</html>	