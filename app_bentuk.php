<?php
require_once 'Lingkaran.php';

$lingkaran1 = new Lingkaran(8.4);
$lingkaran2 = new Lingkaran(10);

echo "Jari-jari Lingkaran 1: " . $lingkaran1->jariJari . " cm <br>";
echo "Luas Lingkaran 1: " . number_format($lingkaran1->hitungLuas(), 2) . " cm² <br>";
echo "Keliling Lingkaran 1: " . number_format($lingkaran1->hitungKeliling(), 2) . " cm <br><br>";

echo "Jari-jari Lingkaran 2: " . $lingkaran2->jariJari . " cm <br>";
echo "Luas Lingkaran 2: " . number_format($lingkaran2->hitungLuas(), 2) . " cm² <br>";
echo "Keliling Lingkaran 2: " . number_format($lingkaran2->hitungKeliling(), 2) . " cm <br>";
?>
