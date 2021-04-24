<?php 
require_once 'models/Pegawai.php';

$ar_agama = ['Islam', 'Kristen Protestan', 'Kristen Katholik', 'Hindu', 'Budha', 'Konghucu'];

$obj = new Pegawai();

$rs = $obj->dataDivisi();

?> 
<div class="card mb-3">
  <div class="card-header bg-white text-black">
<h3>Form Produk</h3>
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
        <input id="nip" name="nip" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pegawai</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="agama" class="col-4 col-form-label">Agama</label>
    <div class="col-8">

      <?php 
          $no = 0;
          foreach ($ar_agama as $agama) {
                
            
        ?>

        <div class="form-check-inline">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="divisi_<?= $no ?>" name="agama" value="<?= $agama ?>"> <?= $agama ?>
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
                
            
        ?>

        <option value="<?= $divisi['id'] ?>"><?= $divisi['nama'] ?></option>
        
        <?php
            }
        ?>
      
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="file" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</div>
</div>