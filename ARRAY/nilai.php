<?php
// Array multidimensi nilai mahasiswa
$nilaiMahasiswa = [
    [
        "nama" => "Aulya Reski",
        "nim" => "22012345",
        "uts" => 80,
        "uas" => 85,
        "tugas" => 90
    ],
    [
        "nama" => "Budi Santoso",
        "nim" => "22054321",
        "uts" => 75,
        "uas" => 80,
        "tugas" => 85
    ],
    [
        "nama" => "Siti Aisyah",
        "nim" => "22067890",
        "uts" => 90,
        "uas" => 95,
        "tugas" => 88
    ]
];

// Fungsi untuk menghitung rata-rata
function hitungRataRata($uts, $uas, $tugas) {
    return ($uts * 0.3) + ($uas * 0.4) + ($tugas * 0.3);
}

// Menampilkan data nilai dalam tabel
echo "<h2>Daftar Nilai Mahasiswa</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Nama</th><th>NIM</th><th>UTS</th><th>UAS</th><th>Tugas</th><th>Rata-rata</th></tr>";

foreach ($nilaiMahasiswa as $mhs) {
    $rata2 = hitungRataRata($mhs['uts'], $mhs['uas'], $mhs['tugas']);
    echo "<tr>";
    echo "<td>{$mhs['nama']}</td>";
    echo "<td>{$mhs['nim']}</td>";
    echo "<td>{$mhs['uts']}</td>";
    echo "<td>{$mhs['uas']}</td>";
    echo "<td>{$mhs['tugas']}</td>";
    echo "<td>" . number_format($rata2, 2) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
