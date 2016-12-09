<?php
$detect=preg_match('/.php/',$_SERVER['REQUEST_URI']);
if($detect) {exit("Direct access not permitted.");}
require_once("config.php");
$look5=mysql_query("SELECT name FROM ".TL);
define('CREATED',$look5);
	if(!SQL){
		exit("<center><div style='width:600px; min-height:200px; background-color:#CCC000; margin-top:100px; margin=auto; border:solid 3px red; border-radius:15px; color:red;'> <p>&nbsp;<p><h2>CAN'T INSTALL!</p><p>Please Cek Your MYSQL USERNAME, PASSWORD and DATABSE For Continue Installing LogosCMS</p><br><br>Written by: Tomo</div></center>");
	} else if(!CREATED) {		
		$satu = mysql_query("CREATE TABLE ".TL2." ( user VARCHAR(50) NOT NULL, pass VARCHAR(300) NOT NULL, PRIMARY KEY (user))") or exit(mysql_error());
		$dua = mysql_query("INSERT INTO ".TL2." (user, pass) VALUES ('".AE."', '".AW."')") or exit(mysql_error());
		$tiga = mysql_query("CREATE TABLE ".TL." ( nomor INT(11) NOT NULL AUTO_INCREMENT, name VARCHAR(100) NOT NULL, isi TEXT NOT NULL, descr TEXT NOT NULL, keyw TEXT NOT NULL, title TEXT NOT NULL, PRIMARY KEY(nomor))")or exit(mysql_error()); 
		$empat = mysql_query("INSERT INTO ".TL." (nomor, name, isi, descr, keyw, title) VALUES ('', 'index', 'isi index', 'description index', 'keywords,index', 'index  logosCMS'), ('', 'home', 'isi home', 'Description home', 'keywords, home', 'Title Home'), ('', 'sejarah', 'isi sejarah', 'description sejarah', 'keywords sejarah', 'Title Sejarah'), ('', 'visimisi', 'isi visimisi', 'description visimisi', 'keywords, visimisi', 'Title Visimisi'), ('', 'kurikulum', 'isi kurikulum', 'description kurikulum', 'keyword kurikulum', 'Title Kurikulum')") or exit(mysql_error());
		if($satu AND $dua AND $tiga AND $empat){
			exit("<center><div style='width:750px; min-height:250px; background-color:green; margin-top:100px; margin=auto; border:solid 3px blue; border-radius:15px; color:white; font-weight:bold;'> <p>&nbsp;<p><h2>Congratulation, LogosCMS was install successfully!<br>Please Remove <span style='color:red;'>require_once(\"install.php\")</span> at <span style='color:blue;'>index.php</span><span style='color:purple;'> Line 2</span><br>&nbsp;<br>Also delete file <span style='color:red;'>install.php</span><br>Written by: Tomo </p></div></center>");
		}} else {
			exit("<center><div style='width:750px;height:250px;background-color:#CCC000;margin-top:100px;margin=auto;border:solid 3px red; border-radius:15px;'><p>&nbsp;&nbsp;&nbsp;<p><h2><span style='color:green;'>Congratulation LogosCMS was Install Sucessfully! </span><br>&nbsp;<br>You Must Remove <span style='color:red;'>require_once(\"install.php\")</span> at <span style='color:blue;'>index.php</span><span style='color:purple;'> Line 2</span><br>&nbsp;<br>and delete file <span style='color:red;'>install.php</span> <br>Written by: Tomo</h2></div></center>");
			}
?>