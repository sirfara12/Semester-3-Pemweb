<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf : A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf : B";

} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf : C";
} else if ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

echo "<br><br>";

$jarakSaatini = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatini < $jarakTarget) {
    $jarakSaatini += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer. <br>";
echo "Jarak target: $jarakTarget km\n <br>";
echo "Peningkatan harian: $peningkatanHarian km/hari\n";

echo "<br><br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5; 
$buahPerTanaman = 10; 
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman); 
}

echo "Jumlah lahan = 10<br>";
echo "tanaman perlahan = 5 <br>";
echo "buah pertanaman = 10 <br>";
echo "Jumlah buah = 0 <br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "<br>";
echo "skor ujian = [85, 92, 78, 96, 88]<br>";
echo "total Skor = 0<br>";
echo "Total skor ujian: $totalSkor";

echo "<br><br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 96];

foreach($nilaiSiswa as $nilai){
    if ($nilai < 60) {
        echo "nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 96] <br>";
    echo "Nilai: $nilai (lulus) <br>";
}
?>