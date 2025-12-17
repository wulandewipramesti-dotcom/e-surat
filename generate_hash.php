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
$mahasiswaPassword = 'budi123';
$mahasiswaHash = password_hash($mahasiswaPassword, PASSWORD_DEFAULT);
echo "Mahasiswa password: $mahasiswaPassword\n";
echo "Mahasiswa hash: $mahasiswaHash\n";
?>
