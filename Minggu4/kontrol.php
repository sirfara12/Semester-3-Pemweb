<?php
    
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    
    // Urutkan nilai siswa dari yang terendah ke tertinggi
    sort($nilaiSiswa);
    
    // Hapus dua nilai terendah dan dua nilai tertinggi
    $nilaiSiswa = array_slice($nilaiSiswa, 2, -2); // Memotong array untuk menghapus dua terendah dan dua tertinggi
    
    // Hitung total nilai dari nilai yang tersisa
    $totalNilai = array_sum($nilaiSiswa);
    
    // Hitung rata-rata dari nilai yang tersisa
    $rataRata = $totalNilai / count($nilaiSiswa);
    
    // Tampilkan hasil
    echo "Nilai setelah menghapus dua tertinggi dan dua terendah: ";
    print_r($nilaiSiswa); // Menampilkan daftar nilai yang tersisa
    echo "<br>Total nilai: $totalNilai<br>";
    echo "Rata-rata nilai: $rataRata";
    
?>