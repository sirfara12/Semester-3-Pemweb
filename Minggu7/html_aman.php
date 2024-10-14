<?php
    // Memeriksa apakah form telah disubmit dengan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Mengambil input teks dan melakukan sanitasi untuk menghindari XSS
        $input = htmlspecialchars($_POST['input']);

        // Mengambil input email
        $email = $_POST['email'];
        
        // Memeriksa apakah input email valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Jika email valid, tampilkan input dan email
            echo "Email valid: " . $email . "<br>";
            echo "Input teks: " . $input . "<br>";
            echo "Data berhasil disimpan!";
        } else {
            // Jika email tidak valid, tampilkan pesan error
            echo "Email tidak valid! Harap masukkan email yang benar.<br>";
        }
    }
?>
