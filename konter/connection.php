<?php  
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "study_kasus_di_konter_dokter_cell_leuwimunding";

	$con = mysqli_connect($server,$username,$password,$database);
	
	if (! $con) {
		echo "Gagal Konek";
		mysqli_connect_error();
	}
	else{
	}

?>
