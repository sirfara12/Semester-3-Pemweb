<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari request POST
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $errors = [];

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi Password
    if (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    if (!empty($errors)) {
        // Mengembalikan pesan error
        echo implode(" ", $errors);
    } else {
        // Proses data lebih lanjut, seperti menyimpan ke database
        // Contoh sederhana:
        // echo "Data valid dan berhasil diproses.";
        
        // Untuk keamanan, sebaiknya password di-hash sebelum disimpan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Simulasi penyimpanan data
        // Misalnya, Anda bisa menyimpan data ke database di sini

        echo "Data valid dan berhasil diproses.";
    }
} else {
    echo "Metode request tidak valid.";
}
?>
