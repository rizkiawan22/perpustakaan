<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];

    $sql = "DELETE FROM buku WHERE id = $id_buku";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data buku berhasil dihapus!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
} else {
    header("Location: index.php");
    exit();
}

mysqli_close($koneksi);
?>