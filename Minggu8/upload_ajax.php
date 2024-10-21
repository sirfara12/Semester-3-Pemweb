<?php
if (isset($_FILES['files'])) { // Mengubah 'file' menjadi 'files' untuk multiple upload
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif"); // Mengizinkan ekstensi gambar
    $max_size = 5242880; // 5 MB per file

    // Membuat direktori jika belum ada
    $upload_dir = "images/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    $responses = array();

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = basename($_FILES['files']['name'][$key]);
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        // Validasi ekstensi
        if (!in_array($file_ext, $allowed_extensions)) {
            $responses[] = "$file_name: Ekstensi tidak diizinkan. Hanya JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
            continue;
        }
        
        // Validasi ukuran
        if ($file_size > $max_size) {
            $responses[] = "$file_name: Ukuran file melebihi 5 MB.";
            continue;
        }
        
        // Sanitasi nama file dan buat nama unik
        $new_file_name = uniqid('', true) . "." . $file_ext;
        $destination = $upload_dir . $new_file_name;
        
        // Pindahkan file ke direktori tujuan
        if (move_uploaded_file($file_tmp, $destination)) {
            $responses[] = "$file_name: Berhasil diunggah.";
        } else {
            $responses[] = "$file_name: Gagal diunggah.";
        }
    }

    echo implode("<br>", $responses);
}
?>
