<?php
$detect=preg_match('/.php/',$_SERVER['REQUEST_URI']);
if($detect) {exit("Direct access not permitted.");}
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
	exit("Restricted Access!");
} 
require_once("config.php");
if (isset($_POST['urls']) AND isset($_POST['title']) AND isset($_POST['descr']) AND isset($_POST['keyw']) AND isset($_POST['isi'])){
	$name=$_POST['urls'];
	$title=$_POST['title'];
	$descr=$_POST['descr'];
	$keyw=$_POST['keyw'];
	$isi=$_POST['isi'];
	SQL;
	$nomors=mysql_query("SELECT nomor FROM ".TL) or exit (mysql_error());
	$nomor=mysql_num_rows($nomors)+1;
	mysql_query("INSERT INTO ".TL." (nomor,name,isi,descr,keyw,title) VALUES ('$nomor','$name','$isi','$descr','$keyw','$title')") or exit (mysql_error());
	mysql_close();
	echo "<center><h2>Halaman $name created sucessfully!</h2></center>";
} else { 
	echo "<center><h2>Lengkapi Semua Kolom yang Ada!</h2></center>";
}
?>
<html>
<head>
<title>..::Halaman Edit Page | Only For Administrator::..</title>
<style>
	.s1 {color:#FFF; font-weight:bold;}
	.s5 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding:4px;}
	.s6 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;font-weight:bold;}
	.s7 {color:#000;font-weight:bold;}
	a{text-decoration:none;}
	 a:hover{font-weight:bold}
</style>
<script language="JavaScript" type="text/javascript" src="editor.min.js"></script>
</head>
<body>
	<table width="866" border="1" style="border:1px solid #999;" align="center" cellpadding="0" cellspacing="0">
		<thead>
			<th height="30" colspan="6" bgcolor="#0000CC">
				<div align="center" class="s1 s5">Halaman Menambah Posting (ADD PAGE) </div>
			</th>
		</thead>
		<tbody>
		<tr style="border:1px solid #CCC;">
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="right" class="s7 s5">URL Name :</div>
			</td>
			<td colspan="5" bgcolor="#CCCC00">
				<div align="left" class="s7 s5"><form action="tambah" method="POST"><input type="text" id="urls" name="urls" style="width:750px; border:inset 2px #CCCC00;"></div>
			</td>
		</tr>
		<tr style="border:1px solid #CCC;">
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="right" class="s7 s5">Title :</div>
			</td>
			<td colspan="5" bgcolor="#CCCC00">
				<div align="left" class="s7 s5"><input type="text" id="title" name="title" style="width:750px; border:inset 2px #CCCC00;"></div>
			</td>
		</tr>
		<tr style="border:1px solid #CCC;">
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="right" class="s7 s5">Description :</div>
			</td>
			<td colspan="5" bgcolor="#CCCC00">
				<div align="left" class="s7 s5"><input type="text"  id="descr" name="descr" style="width:750px; border:inset 2px #CCCC00;"></div>
			</td>
		</tr>
		<tr style="border:1px solid #CCC;">
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="right" class="s7 s5">Keywords :</div>
			</td>
			<td colspan="5" bgcolor="#CCCC00">
				<div align="left" class="s7 s5"><input type="text" id="keyw" name="keyw" style="width:750px; border:inset 2px #CCCC00;"></div>
			</td>
		</tr>
		<tr style="border:1px solid #CCC;">
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="right" class="s7 s5">Isi :</div>
			</td>
			<td colspan="5" bgcolor="#CCCC00">
				<div align="left" class="s7 s5"><textarea id="isi" name="isi" style="border:inset 2px #CCCC00; min-height:200px;" cols="91"></textarea><input type="submit" value="save"></form></div>
				<script language="javascript1.2">make_wyzz('isi');</script>
			</td>
		</tr>
		<tr>	
			<td colspan="6" height="50" bgcolor="#CCCC00">
				<div align="center" class="s5">
					Kembali Ke Halaman :
					<a href="index">Home </a> | 
					<a href="admin">Admin</a> | 
					<a href="<?php if(isset($_POST['urls'])){$name=$_POST['urls']; echo $name;} ?>">Lihat Halaman</a> |
					<a href="logout">Logout</a></br>
				</div>
			<td>
		</tr>
		<tr>
			<td height="30" colspan="6" bgcolor="#0000CC">
				<div align="center" class="s1 s5">
					Written By: Tomo
				</div>
			</td>
		</tr>
		</tbody>
	</table>
</body>
</html>