<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];

    $sql = "SELECT * FROM buku WHERE id = $id_buku";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data_buku = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Buku tidak ditemukan!'); window.location='index.php';</script>";
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="container">
        <h2>Edit Buku</h2>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id_buku" value="<?php echo $data_buku['id']; ?>">

            <label for="judul_buku">Judul Buku:</label>
            <input type="text" id="judul_buku" name="judul_buku" value="<?php echo htmlspecialchars($data_buku['judul_buku']); ?>" required>

            <label for="penulis">Penulis:</label>
            <input type="text" id="penulis" name="penulis" value="<?php echo htmlspecialchars($data_buku['penulis']); ?>" required>

            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?php echo htmlspecialchars($data_buku['tahun_terbit']); ?>" required min="1000" max="2100">

            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori" required>
                <option value="Novel" <?php if($data_buku['kategori'] == 'Novel') echo 'selected'; ?>>Novel</option>
                <option value="Pelajaran" <?php if($data_buku['kategori'] == 'Pelajaran') echo 'selected'; ?>>Pelajaran</option>
                <option value="Komik" <?php if($data_buku['kategori'] == 'Komik') echo 'selected'; ?>>Komik</option>
                <option value="Lainnya" <?php if($data_buku['kategori'] == 'Lainnya') echo 'selected'; ?>>Lainnya</option>
            </select>

            <button type="submit">Update Buku</button>
        </form>
        <p><a href="index.php">Kembali ke Daftar Buku</a></p>
    </div>
</body>
</html>
<?php mysqli_close($koneksi); ?>