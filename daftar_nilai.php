<?php
require_once 'form_nilai.php';
require_once 'class_NilaiMahasiswa.php';

NilaiMahasiswa::aturPersentase(0.3, 0.4, 0.3);

$daftar_mahasiswa = [
    new NilaiMahasiswa("Aulya Reski", "22012345", 80, 85, 90),
    new NilaiMahasiswa("Dina Putri", "22054321", 60, 70, 75),
    new NilaiMahasiswa("Budi Santoso", "22067890", 75, 80, 85),
    new NilaiMahasiswa("Siti Aisyah", "22011223", 90, 95, 88)
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f4; text-align: center; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; background-color: #fff; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        th, td { border: 1px solid black; text-align: center; padding: 10px; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>Daftar Nilai Mahasiswa</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Tugas</th>
        <th>Rata-rata</th>
        <th>Predikat</th>
    </tr>

    <?php
    $no = 1;
    foreach ($daftar_mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td>{$no}</td>";
        echo "<td>{$mhs->nama}</td>";
        echo "<td>{$mhs->nim}</td>";
        echo "<td>{$mhs->nilai_uts}</td>";
        echo "<td>{$mhs->nilai_uas}</td>";
        echo "<td>{$mhs->nilai_tugas}</td>";
        echo "<td>" . number_format($mhs->hitungRataRata(), 2) . "</td>";
        echo "<td>{$mhs->getPredikat()}</td>";
        echo "</tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>
