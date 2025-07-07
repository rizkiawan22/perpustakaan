<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $kategori = $_POST['kategori'];

    $sql = "UPDATE buku SET judul_buku='$judul_buku', penulis='$penulis', tahun_terbit='$tahun_terbit', kategori='$kategori' WHERE id=$id_buku";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data buku berhasil diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
} else {
    header("Location: index.php");
    exit();
}

mysqli_close($koneksi);
?>