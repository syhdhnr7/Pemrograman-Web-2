<?php
if(isset($_POST['proses'])){

$customer = $_POST['customer'];
$produk = $_POST['produk'];
if($produk == "Tv"){
    $harga = 4200000;
} elseif($produk == "Kulkas"){
    $harga = 3100000;
} elseif($produk == "Mesin Cuci"){
    $harga = 3800000;
}
$jumlah = $_POST['jumlah'];
$total = number_format(round($harga * $jumlah));

echo "Nama Customer :  $customer <br>";
echo "Produk Pilihan :  $produk <br>";
echo "Jumlah Beli : $jumlah <br>";
echo "Total Belanja : Rp. $total,-";

} else{
    echo "Tidak Ada Data!";
}
?>