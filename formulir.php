<?php
// Koneksi ke database
require 'php/config.php';

// Mengambil data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah totalHarga ada dalam $_POST dan bukan null
    if (isset($_POST['totalHarga']) && $_POST['totalHarga'] !== '') {
        $totalHarga = $_POST['totalHarga'];

        // Memeriksa apakah totalHarga adalah nilai numerik yang valid
        if (is_numeric($totalHarga)) {
            // Menyimpan data ke database menggunakan prepared statement
            $stmt = $con->prepare("INSERT INTO rental_kendaraan (jenis_kendaraan, durasi_peminjaman, nama, telepon, alamat, tanggal, metode_pembayaran, total_harga) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sissssss", $jenisKendaraan, $durasiPeminjaman, $nama, $telepon, $alamat, $tanggal, $metodePembayaran, $totalHarga);

            $jenisKendaraan = $_POST['jenisKendaraan'];
            $durasiPeminjaman = $_POST['durasiPeminjaman'];
            $nama = $_POST['nama'];
            $telepon = $_POST['telepon'];
            $alamat = $_POST['alamat'];
            $tanggal = $_POST['tanggal'];
            $metodePembayaran = $_POST['metodePembayaran'];

            if ($stmt->execute()) {
                $totalHargaFormatted = number_format($totalHarga); // Format total harga
                $response = 'Pemesanan berhasil. Total harga: Rp ' . $totalHargaFormatted;
                echo '<script>alert("' . $response . '"); window.location.href = "index.php";</script>';
        } else {
    $response = 'Gagal menyimpan data: ' . $stmt->error;
    }
        } else {
            $response = array('message' => 'Gagal menyimpan data: Total harga tidak valid');
        }
    } else {
        $response = array('message' => 'Gagal menyimpan data: Total harga tidak ditemukan');
    }

    echo json_encode($response);
    echo '<script>var message = "' . $response . '"; alert(message); window.history.back();</script>';
}



$sql = "SELECT * FROM mobil";
$result = mysqli_query($con, $sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Kendaraan</title>
    <link rel="stylesheet" href="assets/css/formulir.css">
</head>
<body>
<form method="post" action="formulir.php"> <!-- Pastikan action mengarah ke skrip PHP yang sama -->
    <div class="container">
        <h2>Pemilihan Kendaraan</h2>
        <label for="jenisKendaraan">Jenis Kendaraan:</label>
        <select id="jenisKendaraan" name="jenisKendaraan"> <!-- Pastikan ada atribut name -->
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <option data-kendaraan="<?=htmlspecialchars(json_encode($row))?>" value="<?= $row['id']?>"><?= $row['merk']?></option>
            <?php endwhile ;?>
        </select>
        <label for="durasiPeminjaman">Durasi Peminjaman (hari):</label>
        <input type="number" id="durasiPeminjaman" name="durasiPeminjaman" min="1"> <!-- Pastikan ada atribut name -->
        <button type="button" onclick="hitungHarga()">Hitung Harga</button> <!-- Ganti type submit menjadi type button -->
    </div>

    <div class="container">
        <h2>Pemesanan Kendaraan</h2>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <label for="telepon">Nomor Telepon:</label>
        <input type="tel" id="telepon" name="telepon">
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"></textarea>
        <label for="tanggal">Tanggal Peminjaman:</label>
        <input type="date" id="tanggal" name="tanggal">
        <label for="metodePembayaran">Metode Pembayaran:</label>
        <select id="metodePembayaran" name="metodePembayaran">
            <option value="tunai">Tunai</option>
            <option value="kartuKredit">Kartu Kredit</option>
            <option value="transfer">Transfer Bank</option>
        </select>
        <input type="hidden" id="totalHarga" name="totalHarga"> <!-- Ini adalah input hidden untuk total harga -->
        <button type="submit">Submit</button> <!-- Ini adalah tombol submit -->
    </div>
</form>


    <script src="assets/js/script.js"></script>
</body>
</html>
