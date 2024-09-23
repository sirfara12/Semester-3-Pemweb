<?php
    $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
    $nilaiLulus = [];

    foreach ($nilaiSiswa as $nilai) {
        if ($nilai >= 70) {
            $nilaiLulus[] = $nilai;
        }
    }

    echo "nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 96] <br>";
    echo "nilai lulus = [] <br>";
    echo "Daftar nilai siswa yang lulus: " . implode(', ',$nilaiLulus);

    echo "<br><br>";

    $daftarKaryawan = [
        ['Alice', 7],
        ['Bob', 3],
        ['Chalie', 9],
        ['David', 5],
        ['Eva', 6]
    ];
    $karyawanPengalamanLimaTahun = [];

    foreach ($daftarKaryawan as $karyawan) {
        if ($daftarKaryawan[1] > 5) {
            $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }

    echo "Daftar karyawan: <br>";
    echo "['Alice', 7]<br>";
    echo "['Bob', 3]<br>";
    echo "['Chalie', 9]<br>";
    echo "['David', 5]<br>";
    echo "['Eva', 6]<br><br>";

    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);


    echo "<br><br>";

    $daftarNilai = [
        'Matematika' => [
            ['Alice', 85],
            ['Bob', 92],
            ['Chalie', 78],
        ],
        'Fisika' => [
            ['Alice', 90],
            ['Bob', 88],
            ['Chalie', 75],
        ],
        'Kimia' => [
            ['Alice', 92],
            ['Bob', 80],
            ['Chalie', 85],
        ],
           
        
    ];
    $mataKuliah = 'Fisika';
    echo "daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    foreach ($daftarNilai[$mataKuliah] as $nilai) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }

    echo "<br><br>";
    $daftarNilai = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90]
    ];
    
    // Menghitung rata-rata kelas
    $totalNilai = 0;
    $jumlahSiswa = count($daftarNilai);
    
    foreach ($daftarNilai as $nilaiSiswa) {
        $totalNilai += $nilaiSiswa[1]; // Menambahkan nilai siswa ke total
    }
    
    $rataRata = $totalNilai / $jumlahSiswa;
    
    echo "Rata-rata kelas: $rataRata <br><br>";
    echo "Daftar siswa yang nilainya di atas rata-rata:<br>";
    
    // Menampilkan siswa yang nilainya di atas rata-rata
    foreach ($daftarNilai as $nilaiSiswa) {
        if ($nilaiSiswa[1] > $rataRata) {
            echo "Nama: {$nilaiSiswa[0]}, Nilai: {$nilaiSiswa[1]} <br>";
        }
    }
?>