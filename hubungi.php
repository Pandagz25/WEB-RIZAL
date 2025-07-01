<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = htmlspecialchars($_POST["nama"]);
  $email = htmlspecialchars($_POST["email"]);
  $pesan = htmlspecialchars($_POST["pesan"]);
  $waktu = date("Y-m-d H:i:s");

  $data = "=== Pesan Baru ===\nWaktu: $waktu\nNama: $nama\nEmail: $email\nPesan: $pesan\n\n";

  file_put_contents("pesan.txt", $data, FILE_APPEND);
  echo "<h2>Pesan berhasil dikirim!</h2><a href='index.html'>Kembali ke beranda</a>";
} else {
  echo "Akses tidak sah.";
}
?>
