<?php
require_once '../dbkoneksi.php';
?>
<?php ini_set('display_errors', 0);
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
  $sql = "SELECT * FROM vendor WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_idedit]);
  $row = $st->fetch();
} else {
  $row = [];
}

?>

<form method="POST" action="proses.php">
  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div>
        <input id="nomor" name="nomor" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Vendor</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="nama" name="nama" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kota" class="col-4 col-form-label">kota</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="kota" name="kota" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">kontak</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="kontak" name="kontak" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php $button = (!empty($_idedit)) ? "Update" : "Simpan"; ?>
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
      <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
    </div>
</form>