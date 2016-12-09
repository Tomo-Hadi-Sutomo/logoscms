<?php
require_once("install.php"); //YOU MUST REMOVE THIS LINE (THIS LINE 2 ONLY) AFTER YOU SUCCESSFULLY INSTALL DATABASE LOGOSCMS!

//DON'T CHANGE ANYTHING AFTER THIS
if (isset($_GET['p'])) { 		
	$p = $_GET['p'];	
}
if (empty($p)) {
	$p = "index";
}
if ($p=="login"){
	require_once("login.php");
} else if ($p=="admin"){
	require_once("admin.php");
} else if ($p=="tambah"){
	require_once("tambah.php");
} else if ($p=="edit"){
	require_once("edit.php");
} else if ($p=="hapus"){
	require_once("hapus.php");
} else if ($p=="logout"){
	session_start();
	session_destroy();
	header("location:index");
} else {
	require_once("base.php");
}
?>