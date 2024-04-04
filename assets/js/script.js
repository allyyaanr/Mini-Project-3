function hitungHarga() {
  var selectedOption = document.getElementById("jenisKendaraan");
  var selectedData = JSON.parse(
    selectedOption.options[selectedOption.selectedIndex].dataset.kendaraan
  );
  var durasiPeminjaman = document.getElementById("durasiPeminjaman").value;

  // Mengambil harga dari data mobil yang dipilih
  var hargaPerHari = selectedData.harga;

  // Menghitung total harga berdasarkan durasi peminjaman
  var totalHarga = hargaPerHari * durasiPeminjaman;

  // Mengatur nilai total harga ke dalam input tersembunyi
  document.getElementById("totalHarga").value = totalHarga;

  alert("Total harga peminjaman: Rp " + totalHarga);
}

// function submitForm() {
//   var nama = document.getElementById("nama").value;
//   var telepon = document.getElementById("telepon").value;
// }

function submit() {
  var nama = document.getElementById("nama").value;
  var telepon = document.getElementById("telepon").value;
  var alamat = document.getElementById("alamat").value;
  var tanggal = document.getElementById("tanggal").value;
  var metodePembayaran = document.getElementById("metodePembayaran").value;

  var message =
    "Nama: " +
    nama +
    "\n" +
    "Nomor Telepon: " +
    telepon +
    "\n" +
    "Alamat: " +
    alamat +
    "\n" +
    "Tanggal Peminjaman: " +
    tanggal +
    "\n" +
    "Metode Pembayaran: " +
    metodePembayaran;

  alert(message);
}
