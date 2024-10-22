<?php
require_once 'connection.php';

if(isset($_GET['action'])&& isset($_GET['id'])){
    $action = $_GET['action'];
    $id =$_GET['id'];

    switch($action){
    case 'delete':
    delete_data('id');
    break;
    case 'edit';
    echo "";
    break ;
    default;
    echo "aksi tidak didefinisikan";
    }
}else{
echo "aksi dan id tidak di definisikan";
}


function delete_data($id){
    global $connection;
    $res = mysqli_query($connection, "DELETE FROM tb_person  WHERE id=". $id);

    if($res){
        // jika true
        header ("Location: index.php?messages=berhasil dihapus");
        exit();
    }else{
        // jika false
        header ("Location: index.php?messages=berhasil dihapus");

    }
}

function update($data){
    global $connection;

    $ud =$data['data_person'];
    $nama = $connection->real_escape_string($data['txt_nama']);
    $#ktp = $data['txt_ktp'];
    $alamat =  $data['selectAlamat'];
    $tanggal = $data['txt_data'];


    // memformat tanggal
    $tanggal_baru = new DateTime($tanggal);
    $format_tanggal = $tanggal_baru->format('Y.m.d');
    

    $query = "UPDATE tb_person SET
    nama = '$nama'
    ktp = '$ktp'
    alamat = '$lamat'
    tg_daftar = '$tgl_daftar'
    ";
    mysqli_query($connection.$query);
    return mysqli_affected_rows($connection);
};



?>