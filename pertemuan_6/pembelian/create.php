<?php 
require_once '../dbkoneksi.php';
?>
            
<form method="POST" action="proses.php">
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="date" class="form-control"
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nomor" name="nomor" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="produk_id" class="col-4 col-form-label">Produk_Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="produk_id" name="produk_id" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="jumlah" name="jumlah" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="harga" name="harga" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="vendor_id" class="col-4 col-form-label">Vendor_Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="vendor_id" name="vendor_id" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>
