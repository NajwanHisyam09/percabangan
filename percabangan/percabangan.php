<!DOCTYPE html>
<html>
<head>
    <title>Form Akreditasi Puskesmas</title>
</head>
<body>
    <h2>Form Akreditasi Puskesmas</h2>
    <form action="" method="post">
        <label>Jumlah Ruangan:</label>
        <input type="number" name="jumlah_ruangan" required><br>

        <label>Jumlah Pasien:</label>
        <input type="number" name="jumlah_pasien" required><br>

        <label>Jumlah Dokter:</label>
        <input type="number" name="jumlah_dokter" required><br>

        <label>Pelayanan:</label>
        <select name="pelayanan" required>
            <option value="">Pilih</option>
            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>
        </select><br>

        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jumlah_ruangan = isset($_POST['jumlah_ruangan']) ? intval($_POST['jumlah_ruangan']) : 0;
    $jumlah_pasien = isset($_POST['jumlah_pasien']) ? intval($_POST['jumlah_pasien']) : 0;
    $jumlah_dokter = isset($_POST['jumlah_dokter']) ? intval($_POST['jumlah_dokter']) : 0;
    $pelayanan = isset($_POST['pelayanan']) ? $_POST['pelayanan'] : "";

    if ($jumlah_ruangan >= 5 && $jumlah_pasien >= 100 && $jumlah_dokter >= 5 && $pelayanan == "Ya") {
        $akreditasi = "A";
    } elseif ($jumlah_ruangan >= 3 && $jumlah_pasien >= 50 && $jumlah_dokter >= 3 && $pelayanan == "Ya") {
        $akreditasi = "B";
    } elseif ($jumlah_ruangan >= 2 && $jumlah_pasien >= 30 && $jumlah_dokter >= 2 && $pelayanan == "Ya") {
        $akreditasi = "C";
    } else {
        $akreditasi = "D";
    }

    echo "Akreditasi Puskesmas: " . $akreditasi;
}
?>
