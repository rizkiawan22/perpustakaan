<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $kategori = $_POST['kategori'];

    $sql = "INSERT INTO buku (judul_buku, penulis, tahun_terbit, kategori) VALUES ('$judul_buku', '$penulis', '$tahun_terbit', '$kategori')";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data buku berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
} else {
    header("Location: tambah.php");
    exit();
}

mysqli_close($koneksi);
?>