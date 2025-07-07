<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku Baru</title>
    <link rel="stylesheet" href="css/form.css"> </head>
<body>
    <div class="container">
        <h2>Tambah Buku Baru</h2>
        <form action="proses_tambah.php" method="POST">
            <label for="judul_buku">Judul Buku:</label>
            <input type="text" id="judul_buku" name="judul_buku" required>

            <label for="penulis">Penulis:</label>
            <input type="text" id="penulis" name="penulis" required>

            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" required min="1000" max="2100">

            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori" required>
                <option value="">Pilih Kategori</option>
                <option value="Novel">Novel</option>
                <option value="Pelajaran">Pelajaran</option>
                <option value="Komik">Komik</option>
                <option value="Lainnya">Lainnya</option>
            </select>

            <button type="submit">Simpan Buku</button>
        </form>
        <p><a href="index.php">Kembali ke Daftar Buku</a></p>
    </div>
</body>
</html>