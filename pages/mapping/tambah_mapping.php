<?php
include "../include/koneksi.php";

$ni = $_POST['nik'];
$nm = $_POST['nama'];
$pn = $_POST['position_name'];
$pt = $_POST['position_title'];
$wi = $_POST['witel'];
$te = $_POST['teritory'];
$re = $_POST['regional'];
$lo = $_POST['loker'];
$st = $_POST['sto'];
$le = $_POST['level'];
$bi = $_POST['bizpart_id'];
$di = $_POST['direktorat'];
$un = $_POST['unit'];
$su = $_POST['sub_unit'];
$sg = $_POST['sub_group'];
$gf = $_POST['group_fungsi'];
$cs = $_POST['cost_center'];


$sql = "INSERT INTO `tb_mapping`(`id`, `nik`, `nama`, `position_name`, `position_title`, `witel`, `teritory`, `regional`, `loker`, `sto`, `level`, `bizpart_id`, `direktorat`, `unit`, `sub_unit`, `sub_group`, `group_fungsi`, `cost_center`) VALUES ('$ni','$nm','$pn','$pt','$wi','$te','$re','$lo','$st','$le','$bi','$di','$un','$su','$sg','$gf','$cs')";
$query = mysqli_query($koneksi, $sql); 
// or die (mysqli_error());

if($query){
	echo "Data berhasil ditambahkan";
}else{
	echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}
  
mysqli_close($koneksi);

?>