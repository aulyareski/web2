<?php
// Array asosiatif mahasiswa
$mahasiswa = [
    "nama" => "Aulya Reski",
    "nim" => "22012345",
    "prodi" => "Teknik Informatika",
    "semester" => 4
];

// Menampilkan data mahasiswa
echo "<h2>Data Mahasiswa</h2>";
echo "Nama: " . $mahasiswa["nama"] . "<br>";
echo "NIM: " . $mahasiswa["nim"] . "<br>";
echo "Program Studi: " . $mahasiswa["prodi"] . "<br>";
echo "Semester: " . $mahasiswa["semester"] . "<br>";
?>
