<?php
    // Harga produk
    $hargaProduk = 120000;
    
    // Cek apakah pelanggan memenuhi syarat diskon
    if ($hargaProduk > 100000) {
        // Diskon 20%
        $diskon = 20 / 100 * $hargaProduk;
        // Harga setelah diskon
        $hargaSetelahDiskon = $hargaProduk - $diskon;
    } else {
        // Jika tidak ada diskon
        $hargaSetelahDiskon = $hargaProduk;
    }
    
    // Tampilkan hasil
    echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
    echo "Diskon: 20%<br>";
    echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
    
?>