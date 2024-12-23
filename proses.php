<?php
session_start();

// Menangkap data dari formulir menggunakan metode POST
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$prodi = isset($_POST['prodi']) ? $_POST['prodi'] : '';
$deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';

// Validasi sederhana
if (empty($nim) || empty($nama) || empty($prodi)) {
    echo "Semua field harus diisi!";
    exit;
}

$_SESSION['user_data'] = [
    'nim' => $nim,
    'nama' => $nama,
    'prodi' => $prodi,
    'deskripsi' => $deskripsi,
    'ip_address' => $_SERVER['REMOTE_ADDR'],
    'browser' => $_SERVER['HTTP_USER_AGENT']
];

// Menampilkan pesan sukses
echo "<h3>Data berhasil disimpan ke session!</h3>";
echo "<p><strong>NIM:</strong> {$nim}</p>";
echo "<p><strong>Nama:</strong> {$nama}</p>";
echo "<p><strong>Prodi:</strong> {$prodi}</p>";
echo "<p><strong>Deskripsi:</strong> {$deskripsi}</p>";
echo "<p><strong>IP Address:</strong> {$_SERVER['REMOTE_ADDR']}</p>";
echo "<p><strong>Browser:</strong> {$_SERVER['HTTP_USER_AGENT']}</p>";

// Redirect ke halaman lain jika diperlukan
// header('Location: success.php');
?>
