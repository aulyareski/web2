<!DOCTYPE html>
<html>
<head>
    <title>Selamat Belajar PHP</title>
</head>
<body>
    <h3>Selamat Belajar PHP</h3>
    <?php
    $_nama = "Ahmad Marzuki";
    $_umur = 20;
    $_berat = 60;
    $_prodi = "Sistem Informasi";
    $_kampus = "STT NF";
    
    echo "Hello, selamat datang di PHP!";
    ?>
    <hr>
    <?php
    echo "Nama Saya $_nama. Saya berumur " . $_umur . " tahun";
    echo "<br> Dengan berat badan " . $_berat . " kg";
    echo "<br> Saya Sedang Menempuh Pendidikan di Prodi " . $_prodi . " di kampus " . $_kampus;
    ?>
</body>
</html>
