<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Perpustakaan</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Buku Perpustakaan</h2>
        <p><a href="tambah.php" class="button-add">Tambah Buku Baru</a></p>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';

                $sql = "SELECT * FROM buku ORDER BY judul_buku ASC";
                $result = mysqli_query($koneksi, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row["judul_buku"] . "</td>";
                        echo "<td>" . $row["penulis"] . "</td>";
                        echo "<td>" . $row["tahun_terbit"] . "</td>";
                        echo "<td>" . $row["kategori"] . "</td>";
                        echo "<td>";
                        echo "<a href='edit.php?id=" . $row["id"] . "' class='button-edit'>Edit</a>";
                        echo "<a href='hapus.php?id=" . $row["id"] . "' class='button-delete' onclick='return confirm(\"Yakin ingin menghapus buku ini?\")'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data buku.</td></tr>";
                }
                mysqli_close($koneksi);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>