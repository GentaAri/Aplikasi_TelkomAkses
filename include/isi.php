<?php 
	
	$page = @$_GET['pages'];

	if ($page == "") {
		include "pages/beranda.php";
	}

	if ($page == "beranda") {
		include "pages/beranda.php";
	}

	if ($page == "profile") {
		include "pages/profile.php";
	}

	if ($page == "mapping") {
		include "pages/mapping.php";
	}

	if ($page == "presensi") {
		include "pages/presensi.php";
	}

	if ($page == "kontrak") {
		include "pages/kontrak.php";
	}

?>