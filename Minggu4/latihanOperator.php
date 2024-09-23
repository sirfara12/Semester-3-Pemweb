<?php

$totalkursi = 45;
$kursiterisi = 28;
$kursikosong = $totalkursi - $kursiterisi;
$persentaseKosong = ($kursikosong / $totalkursi) * 100;

echo "TOTAL KURSI = 45 <br>" ;
echo "KURSI TERISI = 28 <br>";
echo "Persentase kursi yang masih kosong: {$persentaseKosong}%";


?>