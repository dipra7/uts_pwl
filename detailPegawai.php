<?php 
require_once 'models/Pegawai.php';

//Tangkap request id di url
$id = $_REQUEST['id'];
$obj = new Pegawai();
$rs = $obj->getPegawai($id);

// print_r($rs); exit();


?>    

<div class="card" style="width: 17rem;">
  <img class="card-img-top" src="img/<?= $rs['foto'] ?>" width="40%">
  <div class="card-body">
    <h5 class="card-title"><?= $rs['nama'] ?></h5>
    <p class="card-text">
        NIP : <?= $rs['nip'] ?>
        <br/>Email : <?= $rs['email'] ?>
        <br/>Agama : <?= $rs['agama'] ?>
        <br/>Divisi : <?= $rs['divisi'] ?>
    </p>
    <a href="index.php?hal=dataPegawai" class="btn btn-info"><i class="fa fa-chevron-left"></i> BACK</a>
  </div>
</div>