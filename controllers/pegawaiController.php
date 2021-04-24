<?php
require_once '../koneksi.php';
require_once '../models/Pegawai.php';

//Tangkap request element form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$iddivisi = $_POST['divisi'];
$foto = $_POST['foto'];
$tombol = $_POST['proses'];



// echo 'NIP => '.$nip;
// echo '<br/> NAMA => '.$nama;
// echo '<br/> EMAIL => '.$email;
// echo '<br/> AGAMA => '.$agama;
// echo '<br/> IDDIVISI => '.$iddivisi;
// echo '<br/> FOTO => '.$foto;
// die();

//Menyimpan data di atas ke sebuah array
$data = [
    $nip,
    $nama,
    $email,
    $agama,
    $iddivisi,
    $foto
];

//Proses
$obj = new Pegawai();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        break;
    
    case 'ubah':
        $data[] = $_POST['idx']; //Tangkap hidden field utk parms ke 8
        $obj->ubah($data);
        break;
        
    case 'hapus':
        $id[] = $_POST['idx']; //Tangkap hidden field utk parms ke 1
        $obj->hapus($id);
        break;
    
    default: //Tombol batal
        header('Location:index.php?hal=produk');
        break;
}
//Landing page
header('Location:../index.php?hal=dataPegawai');
?>