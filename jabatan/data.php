<?php  
	include ("../config.php");
	$query = mysqli_query($mysqli, "SELECT * FROM jabatan_karyawan ORDER BY id_jabatan_karyawan ASC ");
 
	$rows = array();
	while($row = mysqli_fetch_array($query)){
		$rows[] = $row;
	}
	echo json_encode($rows);
?>