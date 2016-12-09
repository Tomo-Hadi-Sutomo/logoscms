<?php
$detect=preg_match('/.php/',$_SERVER['REQUEST_URI']);
if($detect) {exit("Direct access not permitted.");}
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
	exit("Restricted Access!");
} else {
	require_once("config.php");
	function nav(){
		SQL;
		$look=mysql_query("SELECT nomor,name,title FROM ".TL);
		while ($row=mysql_fetch_array($look,MYSQL_BOTH)){
			echo "<tr><td width='10' colspan='1' bgcolor='#FFF'>
			<div align='center' class='s7 s5'>$row[nomor]</div></td>
			<td width='100' colspan='1' bgcolor='#FFF'>
			<div align='center' class='s7 s5'>$row[name]</div></td>
			<td width='300' colspan='1' bgcolor='#FFF'>
			<div align='center' class='s7 s5'>$row[title]</div></td>
			<td colspan='1' bgcolor='#FFF'>
			<div align='center' class='s7 s5'><a href='$row[name]'>Lihat</a></div></td>
			<td colspan='1' bgcolor='#FFF'>
			<div align='center' class='s7 s5'><a href='edit?field=$row[name]'>Edit</a></div></td>
			<td colspan='1' bgcolor='#FFF'>
			<div align='center' class='s7 s5'><a href='hapus?field=$row[name]'>Hapus</a></div></td></tr>";
		}
	}


?>
<html>
<head>
<title>..::Login Administration::..</title>
<style>
	.s1 {color:#FFF; font-weight:bold;}
	.s5 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;padding:4px;}
	.s6 {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;font-weight:bold;}
	.s7 {color:#000;font-weight:bold;}
	a{text-decoration:none;}
	 a:hover{font-weight:bold}
</style>
</head>
<body>
	<table width="566" border="1" style="border:1px solid #999;" align="center" cellpadding="0" cellspacing="0">
		<thead>
			<th height="30" colspan="6" bgcolor="#0000CC">
				<div align="center" class="s1 s5">Halaman Management Posting </div>
			</th>
		</thead>
		<tbody>
		<tr>
			<td height="30" colspan="6" bgcolor="#CCCC00">
				<div align="center" class="s5"><a href="tambah">>>Add Posting Disini!<<</a></div>
			</td>
		</tr>
		<tr style="border:1px solid #CCC;">
			<td width="10" colspan="1" bgcolor="#CCCC00">
				<div align="center" class="s7 s5">No</div>
			</td>
			<td width="100" colspan="1" bgcolor="#CCCC00">
				<div align="center" class="s7 s5">URL Name</div>
			</td>
			<td width="300" colspan="1" bgcolor="#CCCC00">
				<div align="center" class="s7 s5">Title</div>
			</td>
			<td colspan="3" bgcolor="#CCCC00">
				<div align="center" class="s7 s5">Action</div>
			</td>
		</tr>
		<?php nav(); ?>
		<tr>	
			<td colspan="6" height="50" bgcolor="#FFF">
				<div align="center" class="s5">
					Kembali Ke Halaman :
					<a href="index">Home </a> | 
					<a href="admin">Admin</a> | 
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
<?php 
	}
?>	