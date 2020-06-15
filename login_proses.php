<?php 

include 'include/koneksi.php';

$username=$_POST['username'];
$pw=$_POST['password'];

$query=mysqli_query($koneksi, "select * from users where username='$username' and password='$pw'")or die(mysqli_error());
$r=mysqli_num_rows($query);

if($r==1){

	$a=mysqli_fetch_assoc($query);
	header("location:index.php");
	
}else{

	echo "<script>alert('Id atau Password Salah');window.location='login.html'</script>";

}
 
?>