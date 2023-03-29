<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Form Belanja</title>
</head>

<body>
    <div class="container-fluid mx-2 mt-3">
        <div class="row">
            <div class="col-md-8">
                <h2>Belanja Online</h2>
                <hr>
                <form method="POST" action="proses_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-2 col-form-label"><b>Customer</b></label>
                        <div class="col-5">
                            <input id="customer" name="customer" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2"><b>Pilih Produk</b></label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="TV">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="Kulkas">
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-2 col-form-label"><b>Jumlah</b></label>
                        <div class="col-2">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-2 col-8">
                            <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">Tv : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>

<?php

?>