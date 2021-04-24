<?php
session_start();
require_once '../koneksi.php';
require_once '../models/Member.php';

//Tangkap request element form
$username = $_POST['username'];
$password = $_POST['password'];

//Menyimpan data di atas ke sebuah array
$data = [
    $username,
    $password
];

//Proses
$obj = new Member();
$rs = $obj->cekLogin($data);

// print_r($rs);

// die();

if(!empty($rs)){
    //Simpan session
    $_SESSION['MEMBER'] = $rs;

    //Landing page
    header('Location:../index.php?hal=home');
}else{
    //Landing page
    header('Location:index.php?hal=gagalLogin');
}
?>