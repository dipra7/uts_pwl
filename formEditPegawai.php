<?php 
require_once 'models/Pegawai.php';

$ar_agama = ['Islam', 'Kristen Protestan', 'Kristen Katholik', 'Hindu', 'Budha', 'Konghucu'];

$obj = new Pegawai();

$rs = $obj->dataDivisi();

//Tangkap request id di URL
$id = $_REQUEST['id'];
$data_edit = $obj->getPegawai($id);


?> 

<h3>Form Edit Produk</h3>
<form method="POST" action="controllers/pegawaiController.php">
<div class="form-group row">
    <label for="nip" class="col-4 col-form-label">NIP</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nip" name="nip" type="text" value="<?= $data_edit['nip'] ?>" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pegawai</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" value="<?= $data_edit['nama'] ?>" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" value="<?= $data_edit['email'] ?>" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="agama" class="col-4 col-form-label">Agama</label>
    <div class="col-8">

      <?php 
          $no = 0;
          foreach ($ar_agama as $agama) {
            $cek = ($data_edit['agama'] == $agama) ? "checked" : "";
            
        ?>

        <div class="form-check-inline">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="divisi_<?= $no ?>" name="agama" value="<?= $agama ?>" required <?= $cek ?> > <?= $agama ?>
          </label>
        </div>
        
      <?php
        $no++;
          }
      ?>

    </div>
  </div>
  <div class="form-group row">
    <label for="divisi" class="col-4 col-form-label">Divisi</label> 
    <div class="col-8">
      <select id="divisi" name="divisi" class="custom-select">
        <option value="0"> -- Pilih Divisi --</option>
        
        <?php 
            foreach ($rs as $divisi) {
              $selected = ($data_edit['iddivisi'] == $divisi['id']) ? "selected" : "";
            
        ?>

        <option value="<?= $divisi['id'] ?>" <?= $selected ?>><?= $divisi['nama'] ?></option>
        
        <?php
            }
        ?>
      
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" value="<?= $data_edit['foto'] ?>" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="ubah" class="btn btn-info">Ubah</button>
      <input type="hidden" name="idx" value="<?= $id ?>">
    </div>
  </div>
</form>