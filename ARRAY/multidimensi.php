<?php
// Array multidimensi mahasiswa
$mahasiswa = [
    [
        "nama" => "Aulya Reski",
        "nim" => "22012345",
        "prodi" => "Teknik Informatika",
        "semester" => 4
    ],
    [
        "nama" => "Budi Santoso",
        "nim" => "22054321",
        "prodi" => "Sistem Informasi",
        "semester" => 3
    ],
    [
        "nama" => "Siti Aisyah",
        "nim" => "22067890",
        "prodi" => "Teknik Elektro",
        "semester" => 5
    ]
];

// Menampilkan data mahasiswa dalam tabel
echo "<h2>Daftar Mahasiswa</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Nama</th><th>NIM</th><th>Program Studi</th><th>Semester</th></tr>";

foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td>{$mhs['nama']}</td>";
    echo "<td>{$mhs['nim']}</td>";
    echo "<td>{$mhs['prodi']}</td>";
    echo "<td>{$mhs['semester']}</td>";
    echo "</tr>";
}

echo "</table>";
?>
