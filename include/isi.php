<?php 
	
	$page = @$_GET['pages'];

	if ($page == "") {
		include "pages/beranda/beranda.php";
	}

	if ($page == "beranda") {
		include "pages/beranda/beranda.php";
	}

	if ($page == "profile") {
		include "pages/profile/profile.php";
	}

	if ($page == "mapping") {
		include "pages/mapping/mapping.php";
	}

	if ($page == "presensi") {
		include "pages/presensi/presensi.php";
	}

	if ($page == "kontrak") {
		include "pages/kontrak/kontrak.php";
	}

	if ($page == "karyawan_telkom") {
		include "pages/karyawan_telkom/karyawan_telkom.php";
	}

	if ($page == "karyawan_mitra") {
		include "pages/karyawan_mitra/karyawan_mitra.php";
	}
	
	


?>