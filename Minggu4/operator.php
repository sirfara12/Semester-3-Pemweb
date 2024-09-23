<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Variabel a = {$a} <br>";
echo "Variabel b = {$b} <br>";
echo "Tampilkan hasil a + b = {$hasilTambah} <br>";
echo "Tampilkan hasil a - b = {$hasilKurang} <br> ";
echo "Tampilkan hasil a * b = {$hasilKali} <br> ";
echo "Tampilkan hasil a / b = {$hasilBagi} <br>";
echo "Tampilkan a % b =  {$sisaBagi} <br>";
echo "Tampilkan a ** b = {$pangkat} <br>";


echo "<br><br>";
$hasilSama = $a == $b;
$hasilTidaksama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilsama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;;

echo "Tampilkan hasil a = = b =  {$hasilSama} <br>";
echo "Tampilkan hasil a != b = {$hasilTidaksama} <br> ";
echo "Tampilkan hasil a < b = {$hasilLebihKecil} <br> ";
echo "Tampilkan hasil a > b = {$hasilLebihBesar} <br>";
echo "Tampilkan hasil a <= b = {$hasilLebihKecilsama} <br>";
echo "Tampilkan hasil a >= b = {$hasilLebihBesarSama} <br>";

echo "<br><br>";
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Tampilkan a && b = {$hasilAnd} <br>";
echo "Tampilkan a || b = {$hasilOr} <br>";
echo "Tampilkan !a = {$hasilNotA} <br>";
echo "Tampilkan !b = {$hasilNotB} <br>";

echo "<br><br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Tampilkan a += b ={$a} <br>";
echo "Tampilkan a -= b ={$a} <br>";
echo "Tampilkan a *= b ={$a} <br>";
echo "Tampilkan a /= b ={$a} <br>";
echo "Tampilkan a %= b ={$a} <br>";

echo "<br><br>";

$hasilIdentik = $a == $b;
$hasilTidakIdentik = $a !== $b;

echo "Tampilkan hasil identik = " . ($hasilIdentik ? 'benar' : 'salah') . "<br>";
echo "Tampilkan hasil tidak identik = " . ($hasilTidakIdentik ? 'benar' : 'salah') . "<br>";
?>