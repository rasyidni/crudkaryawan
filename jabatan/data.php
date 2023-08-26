<?php  
	include ("../config.php");

	if($_GET['action'] == "table_data") {
		$columns = array(
			0 => 'id_jabatan_karyawan',
			1 => 'id_jabatan_karyawan',
			2 => 'nama_jabatan_karyawan',
			3 => 'id_jabatan_karyawan',
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
				where nama_jabatan_karyawan like '%$search%' or
				id_jabatan_karyawan like '%$search%'
				order by $order $dir
				limit $start, $limit"
			);

			$datacount = $querycount -> fetch_array();
			$totalFiltered = $datacount['jumlah'];
		}
		$data = array();
		if(!empty($query)) {
			$no = $start + 1;
			while($dataJabatan = $query -> fetch_array()) {
				$nestedData['checkbox'] = "<input class='checkbox' type='checkbox'>";
            	$nestedData['no'] = $no;
				$nestedData['nama_jabatan_karyawan'] = $dataJabatan['nama_jabatan_karyawan'];
				$nestedData['id_jabatan_karyawan'] = $dataJabatan['id_jabatan_karyawan'];

				$nestedData['aksi'] = "
				<p class='text-center'>
					<a href='editdata.php?id=".$dataJabatan['id_jabatan_karyawan']."' type='button' class='btn btn-warning'>
						<i class='fa fa-edit'></i></a> |
					<a href='hapusdata.php?id=".$dataJabatan['id_jabatan_karyawan']."' type='button' class='btn btn-danger alert_notif'>
						<i class='fa fa-trash'></i>
					</a>
				</p>
				";
				
				$data[] = $nestedData;
				$no++;
			}
		}
		$json_data = array(
			"draw"            => intval( $_POST['draw']),
			"recordsTotal"    => intval( $totalData),
			"recordsFiltered" => intval( $totalFiltered),
			"data"            => $data
		);

		echo json_encode($json_data);
	}
?>