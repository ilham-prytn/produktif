<?php
$sekarang = getdate();

$hari = $sekarang['mday'];
$bulan = $sekarang['mon'];
$tahun = $sekarang['year'];

echo "Tanggal, bulan, dan tahun: $hari-$bulan-$tahun";
?>