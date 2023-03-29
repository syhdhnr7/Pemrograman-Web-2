<?php
require_once 'dbkoneksi.php';
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'dbpos');

// Mengecek apakah parameter iddel ada dan tidak kosong
if(isset($_GET['iddel']) && !empty($_GET['iddel'])) {
    // Menghapus data produk dengan id yang diberikan
    $id = $_GET['iddel'];
    $query = "DELETE FROM produk WHERE id = $id";
    mysqli_query($conn, $query);

    // Redirect kembali ke halaman daftar produk
    header("Location:list_produk.php");
    exit;
}
?>

<!-- Tombol delete pada halaman daftar produk -->
<a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Ingin Menghapus Data Produk <?=$row['nama']?>?')) {return false}">Delete</a>