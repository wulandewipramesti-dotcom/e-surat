<?php
echo password_hash('admin123', PASSWORD_DEFAULT);
?>

<?php
$mahasiswaPassword = 'mahasiswa123';
$mahasiswaHash = password_hash($mahasiswaPassword, PASSWORD_DEFAULT);
echo "Mahasiswa password: $mahasiswaPassword\n";
echo "Mahasiswa hash: $mahasiswaHash\n";
?>

<?php

$password = 'budi123'; // ganti password kamu
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;
