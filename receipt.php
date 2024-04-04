<?php
// Pastikan file config.php sudah di-include untuk koneksi ke database
require 'php/config.php';

// Ambil ID pemesanan terakhir
$id_pemesanan = $con->insert_id;

// Query untuk mengambil data pemesanan berdasarkan ID
$sql = "SELECT * FROM rental_kendaraan WHERE id = $id_pemesanan";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Pemesanan</title>
    <link rel="stylesheet" href="assets/css/receipt.css">
</head>
<body>
    <div class="container">
        <h1>Receipt Pemesanan Kendaraan</h1>
        <div class="receipt-info">
            <p><strong>ID Pemesanan:</strong> <?php echo $row['id']; ?></p>
            <p><strong>Nama:</strong> <?php echo $row['nama']; ?></p>
            <p><strong>Jenis Kendaraan:</strong> <?php echo $row['jenis_kendaraan']; ?></p>
            <p><strong>Durasi Peminjaman:</strong> <?php echo $row['durasi_peminjaman']; ?> hari</p>
            <p><strong>Tanggal Peminjaman:</strong> <?php echo $row['tanggal']; ?></p>
            <p><strong>Metode Pembayaran:</strong> <?php echo $row['metode_pembayaran']; ?></p>
            <p><strong>Total Harga:</strong> Rp <?php echo number_format($row['total_harga']); ?></p>
        </div>
    </div>
</body>
</html>

<?php
} else {
    echo "Data pemesanan tidak ditemukan.";
}
?>
