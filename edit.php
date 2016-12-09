<?php
$detect=preg_match('/.php/',$_SERVER['REQUEST_URI']);
if($detect) {exit("Direct access not permitted.");}
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
	exit("Restricted Access!");
}
require_once("config.php"); 
if (isset($_POST['title'])){
	$update=$_POST['title'];
	FL;SQL;
	mysql_query("UPDATE ".TL." SET title = '$update' WHERE name = '$fields'")or exit (mysql_error());
}
if (isset($_POST['descr'])){
	$update=$_POST['descr'];
	FL;SQL;
	mysql_query("UPDATE ".TL." SET descr='$update' WHERE name='$fields'") or exit (mysql_error());
}
if (isset($_POST['keyw'])){
	$update=$_POST['keyw'];
	FL;SQL;
	mysql_query("UPDATE ".TL." SET keyw='$update' WHERE name='$fields'") or exit(mysql_error());
}
if (isset($_POST['isi'])){
	$update=$_POST['isi'];
	FL;SQL;
	mysql_query("UPDATE ".TL." SET isi='$update' WHERE name='$fields'") or exit(mysql_error());
}
//tampil edit page
	FL;SQL;
	$look=mysql_query("SELECT * FROM ".TL." WHERE name='$fields'");
	while ($row=mysql_fetch_array($look,MYSQL_BOTH)){
	$name=$row['name'];
	$title=$row['title'];
	$descr=$row['descr'];
	$keyw=$row['keyw'];
	$isi=$row['isi'];
	}
	mysql_close();
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
				<div align="center" class="s1 s5">Halaman Management Posting </div>
			</th>
		</thead>
		<tbody>
		<tr>
			<td height="30" colspan="6" bgcolor="#FFF">
				<div align="center" class="s5"><a href="tambah">>>Add Posting Disini!<<</a></div>
			</td>
		</tr>
		<tr>
			<td height="30" colspan="6" bgcolor="#CCCC00">
				<div align="center" class="s7 s5"><?php echo $name; ?></div>
			</td>
		</tr>
		<tr style="border:1px solid #CCC;">
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="right" class="s7 s5">Title :</div>
			</td>
			<td colspan="5" bgcolor="#CCCC00">
				<div align="left" class="s7 s5"><form action="<?php $field=$_GET['field']; echo'edit?field='.$field;?>" method="POST"><input type="text" id="title" name="title" style="width:750px; border:inset 2px #CCCC00;" value='<?php echo $title; ?>'></br><input type="submit" value="save"></form></div>
			</td>
		</tr>
		<tr style="border:1px solid #CCC;">
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="right" class="s7 s5">Description :</div>
			</td>
			<td colspan="5" bgcolor="#CCCC00">
				<div align="left" class="s7 s5"><form action="<?php $field=$_GET['field']; echo'edit?field='.$field;?>" method="POST"><input type="text"  id="descr" name="descr" style="width:750px; border:inset 2px #CCCC00;" value='<?php echo $descr; ?>'></br><input type="submit" value="save"></form></div>
			</td>
		</tr>
		<tr style="border:1px solid #CCC;">
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="right" class="s7 s5">Keywords :</div>
			</td>
			<td colspan="5" bgcolor="#CCCC00">
				<div align="left" class="s7 s5"><form action="<?php $field=$_GET['field']; echo'edit?field='.$field;?>" method="POST"><input type="text" id="keyw" name="keyw" style="width:750px; border:inset 2px #CCCC00;" value='<?php echo $keyw; ?>'></br><input type="submit" value="save"></form></div>
			</td>
		</tr>
		<tr style="border:1px solid #CCC;">
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="right" class="s7 s5">Isi :</div>
			</td>
			<td colspan="5" bgcolor="#CCCC00">
				<div align="left" class="s5"><form action="<?php $field=$_GET['field']; echo'edit?field='.$field; ?>" method="POST"><textarea id="isi" name="isi" style="border:inset 2px #CCCC00; min-height:200px; background:#FFF;" cols="91"><?php echo $isi; ?></textarea><input type="submit" value="save"></form></div>
				<script language="javascript1.2">make_wyzz('isi');</script>
			</td>
		</tr>
		<tr>	
			<td colspan="6" height="50" bgcolor="#FFF">
				<div align="center" class="s5">
					Kembali Ke Halaman :
					<a href="index">Home </a> | 
					<a href="admin">Admin</a> | 
					<a href="<?php $fields=$_GET['field']; echo $fields;?>">Lihat Halaman</a> |
					<a href="logout">Logout</a></br>
				</div>
			<td>
		</tr>
		<tr>
			<td height="30" colspan="6" bgcolor="#0000CC">
				<div align="center" class="s1 s5">
					Written By : Tomo
				</div>
			</td>
		</tr>
		</tbody>
	</table>
</body>
</html>