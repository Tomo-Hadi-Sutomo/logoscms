<?php
$detect=preg_match('/.php/',$_SERVER['REQUEST_URI']);
if($detect) {exit("Direct access not permitted.");}
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
	exit("Restricted Access!");
}  else {
require_once("config.php");
	?>
<html>
<head>
<title>..::: WARNING!! Confirmation :::..</title>
<style>
				.s1 {color:#FFF !important; font-weight:bold;}
				.s2 {font-weight:bold;}
				.s5 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;}
				.s6 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;font-weight:bold;}
				a {text-decoration:none;}
				a:hover{font-weight:bold}
</style>
</head>
<body>
	<table width="308" border="1" style="margin:auto; margin-top:100px; border:1px solid #999;" align="center'"cellpadding="0" cellspacing="0">
		<tr>
			<td height="30" colspan="1" bgcolor="red" class="s1 s5">
			<center>WARNING!!!</center></td>
		</tr>
		<tr>
			<td cols="1" height="100" bgcolor="#FFF">
				<div align="center" class="s2 s5">Anda yakin akan menghapus halaman <span style="color:red; font-weight:bold;"><?php $field=$_GET['field']; echo $field;?></span> ini?</div>
				</br>
				<center><a href="hapus?field=<?php $field=$_GET['field']; echo $field; ?>&confirm=ya"><button>Yes</button>&nbsp;&nbsp;&nbsp;
				<a href="admin"><button>No</button></center>
			</td>
		</tr>
		<tr>
			<td height="30" colspan="1" bgcolor="red">
				<div align="center" class="s1 s5">BE CAREFULL!</div>
			</td>
		</tr>
	</table>
</body>
</html>
<?php	
}
if (isset($_GET["confirm"]) AND $_GET["confirm"]=="ya"){
	FL;SQL;
	mysql_query("DELETE FROM ".TL." WHERE name='$field'") or exit (mysql_error());
	mysql_close();
	header("location:admin");
}
?>