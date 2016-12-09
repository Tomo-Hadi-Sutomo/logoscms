<?php
$detect=preg_match('/.php/',$_SERVER['REQUEST_URI']);
if($detect) {exit("Direct access not permitted.");}
require_once("config.php");
	SQL;
	$look=mysql_query("SELECT * FROM ".TL." WHERE name='$p'");
	while ($row = mysql_fetch_array($look,MYSQL_BOTH)) {
			$r_title = $row['title'];
			$r_desc = $row['descr'];
			$r_key = $row['keyw'];
			$r_content = $row['isi'];
			$nomor = $row['nomor'];
		}
	if(isset($nomor)){$nomor=$nomor+1; 
	$look2=mysql_query("SELECT * FROM ".TL." WHERE nomor='$nomor'");
	while ($row = mysql_fetch_array($look2,MYSQL_ASSOC)) {
			$r_title2 = $row['title'];
			//$r_desc2 = $row['descr'];
			//$r_key2 = $row['keyw'];
			$r_content2 = $row['isi'];
		}}
	if(isset($nomor)){$nomor2=$nomor+2;
	$look3=mysql_query("SELECT * FROM ".TL." WHERE nomor='$nomor2'");
	while ($row = mysql_fetch_array($look3,MYSQL_ASSOC)) {
			$r_title3 = $row['title'];
			$r_content3 = $row['isi'];
		}}
	//Fungsi Menu
	function nav(){
		SQL;
		$look4=mysql_query("SELECT name FROM ".TL);
		while ($row=mysql_fetch_array($look4,MYSQL_ASSOC)){
			echo "<li><a href='$row[name]'>".ucfirst($row['name'])."</a></li>";
		}
	}
	function menuatas(){
		SQL;
		$look5=mysql_query("SELECT name FROM ".TL);
		$i=0;
		while ($row=mysql_fetch_array($look5,MYSQL_NUM) AND $i<4){
			$i++;
			echo "<li><a href='$row[0]'>".ucfirst($row[0])."</a></li>";
		}
	}
	if (empty($r_content)) {
		$r_title= "Upps, Halaman tidak ditemukan";
		$r_content=$r_desc=$r_key="<h2>Cek alamat url Anda!<h2>";
	}
require_once("template.html");
?>