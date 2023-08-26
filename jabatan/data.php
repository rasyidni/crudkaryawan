<?php  
	include ("../config.php");

	if($_GET['action'] == "table_data") {
		$columns = array(
			0 => 'id_jabatan_karyawan',
			1 => 'nama_jabatan_karyawan',
		);

		$querycount = $mysqli -> query(
			"SELECT count(id_jabatan_karyawan)
			as jumlah
			FROM jabatan_karyawan"
		);

		$datacount = $querycount -> fetch_array();
		$totalData = $datacount['jumlah'];
		$totalFiltered = $totalData;

		$limit = $_POST['length'];
		$start = $_POST['start'];
		$order = $columns[$_POST['order']['0']['column']];
		$dir = $_POST['order']['0']['dir'];

		if(empty($_POST['search']['value'])) {
			$query = $mysqli -> query(
				"SELECT * from jabatan_karyawan 
				order by $order $dir
				limit $start, $limit"
			);
		} else {
			$search = $_POST['search']['value'];
			$query = $mysqli -> query(
				"SELECT * from jabatan_karyawan
				where nama_jabatan_karyawan like '%$search%' or
				id_jabatan_karyawan like '%$search'
				order by $order $dir
				limit $start, $limit"
			);

			$querycount = $mysqli -> query(
				"SELECT count(id_jabatan_karyawan)
				as jumlah
				from jabatan_karyawan
				where nama_jabatan_karyawan like '%$search' or
				id_jabatan_karyawan like '%$search'
				order by $order $dir
				limit $start, $limit"
			);

			$datacount = $querycount -> fetch_array();
			$totalFiltered = $datacount['jumlah'];
		}
	}
	
	echo json_encode($rows);
?>