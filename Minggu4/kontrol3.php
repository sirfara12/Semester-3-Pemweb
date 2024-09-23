<?php
// Skor pemain
$totalSkor = 550; // Ganti dengan skor yang relevan

// Tampilkan total skor pemain
echo "Total skor pemain adalah: $totalSkor<br>";

// Cek apakah pemain mendapatkan hadiah tambahan
if ($totalSkor > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>
