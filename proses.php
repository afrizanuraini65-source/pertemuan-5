<?php
$nama = htmlspecialchars($_POST['nama']);
$alamat = htmlspecialchars($_POST['alamat']);
$tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);

if (empty($nama) || empty($alamat) || empty($tanggal_lahir) || empty($jenis_kelamin)) {
    echo "<h3>Data tidak lengkap! Silakan isi semua kolom.</h3>";
} else {
    echo "<h2>Data yang kamu kirim:</h2>";
    echo "Nama: $nama <br>";
    echo "Alamat: $alamat <br>";
    echo "Tanggal Lahir: $tanggal_lahir <br>";
    echo "Jenis Kelamin: $jenis_kelamin <br>";
}
?>
