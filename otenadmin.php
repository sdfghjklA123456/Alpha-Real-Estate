<?php
// autentikasi.php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['adminid'])) {
    // Redirect to the login page if not authenticated
    header('Location: login.html');
    exit();
}

// Mulai session (satu baris ini sudah ada pada potongan kode sebelumnya, hanya ditambahkan di sini sebagai pengingat)
session_start();

if (isset($_SESSION['adminid'])) {
    $doctorid = $_SESSION['adminid'];
    // Lakukan query ke database untuk mengambil data berdasarkan $id_user
    // Tampilkan data sesuai kebutuhan
} else {
    // Tindakan jika tidak ada sesi yang sesuai (biasanya, alihkan pengguna ke halaman login)
}
?>
