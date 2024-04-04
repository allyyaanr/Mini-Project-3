CREATE TABLE mobil(
    id int PRIMARY KEY AUTO_INCREMENT,
    merk varchar(255),
    harga int(11),
    seat varchar(255),
    image varchar(255) 
);

CREATE TABLE rental_kendaraan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jenis_kendaraan VARCHAR(50) NOT NULL,
    durasi_peminjaman INT NOT NULL,
    nama VARCHAR(100) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    alamat TEXT NOT NULL,
    tanggal DATE NOT NULL,
    metode_pembayaran VARCHAR(50) NOT NULL,
    total_harga DECIMAL(10,2) NOT NULL
);