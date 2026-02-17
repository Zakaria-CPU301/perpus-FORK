<?php
include 'koneksi.php';
$qry = $conn->query("SELECT b.*, k.nama_kategori FROM buku bINNER JOIN kategori k ON k.id = b.id_kategori");
$result = $qry->fetch_all(MYSQLI_ASSOC);
