<?php 
include("../config.php");

if($_GET['action'] == "table_data"){
    $columns = array(
        0 => 'id_karyawan',
        1 => 'id_karyawan',
        2 => 'nama_karyawan',
        3 => 'nama_jabatan_karyawan',
        4 => 'no_telp',
        5 => 'foto',
        6 => 'id_karyawan',
    );

    $querycount = $mysqli -> query(
        "SELECT count(id_karyawan) as jumlah FROM karyawan 
        LEFT JOIN jabatan_karyawan 
        ON karyawan.id_jabatan_karyawan = jabatan_karyawan.id_jabatan_karyawan"
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
            "SELECT * from karyawan 
            left join jabatan_karyawan on 
            karyawan.id_jabatan_karyawan = jabatan_karyawan.id_jabatan_karyawan 
            order by $order $dir
            limit $start, $limit"
        );
    } else {
        $search = $_POST['search']['value'];
        $query = $mysqli -> query(
            "SELECT * from karyawan 
            left join jabatan_karyawan on 
            karyawan.id_jabatan_karyawan = jabatan_karyawan.id_jabatan_karyawan
            where nama_karyawan like '%$search%' or
            nama_jabatan_karyawan like '%$search%' or
            no_telp like '%$search%' or
            foto like '%$search%'
            order by $order $dir
            limit $start, $limit"
        );

        $querycount = $mysqli -> query(
            "SELECT count(id_karyawan) as jumlah from karyawan 
            left join jabatan_karyawan on 
            karyawan.id_jabatan_karyawan = jabatan_karyawan.id_jabatan_karyawan
            where nama_karyawan like '%$search%' or
            nama_jabatan_karyawan like '%$search%' or
            no_telp like '%$search%' or
            foto like '%$search%'
            order by $order $dir
            limit $start, $limit"
        );

        $datacount = $querycount -> fetch_array();
        $totalFiltered = $datacount['jumlah'];
    }
    $data = array();
    if(!empty($query)){
        $no = $start + 1;
        while ($dataKaryawan = $query -> fetch_array()) {
            $nestedData['checkbox'] = "<input class='checkbox' type='checkbox'>";
            $nestedData['no'] = $no;
            $nestedData['nama_karyawan'] = $dataKaryawan['nama_karyawan'];
            $nestedData['nama_jabatan_karyawan'] = $dataKaryawan['nama_jabatan_karyawan'];
            $nestedData['no_telp'] = $dataKaryawan['no_telp'];
            $nestedData['foto'] = "<img class='img-fluid' src='foto/".$dataKaryawan['foto']."' width='50' height='50' alt='Photo'>";

            $nestedData['aksi'] = "
            <a href='karyawan/editdata.php?id=".$dataKaryawan['id_karyawan']."' type='button' class='btn btn-warning'>
                <i class='fa fa-edit'></i></a> |
            <a href='karyawan/hapusdata.php?id=".$dataKaryawan['id_karyawan']."&idj=".$dataKaryawan['id_jabatan_karyawan']."&foto=".$dataKaryawan['foto']."' type='button' class='btn btn-danger' onclick='return confirmAndDelete(event)'>
                <i class='fa fa-trash'></i>
            </a>
            ";

            $data[] = $nestedData;
            $no++;
        }
    }
    $json_data = array(
        'draw'                => intval($_POST['draw']),
        'recordsTotal'        => intval($totalData),
        'recordsFiltered'     => intval($totalFiltered),
        'data'                => $data
    );

    echo json_encode($json_data);
}
?>