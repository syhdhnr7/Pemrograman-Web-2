<?php
require_once '../dbkoneksi.php';

// Menangkap data iddel dari url
$id = $_GET['iddel'];

$dbh->query("DELETE FROM vendor WHERE id=$id");

header('location:index.php');

?>