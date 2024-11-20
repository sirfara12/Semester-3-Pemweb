<?php
    // Parameter koneksi
    $serverName = "DESKTOP-H3Q9MPI"; // Nama server dan port
    $connectionOptions = [
        "Database" => "prakwebdb",
        "Uid" => "", // Masukkan username SQL Server
        "PWD" => "", // Masukkan password SQL Server
        "Encrypt" => true,
        "TrustServerCertificate" => true
    ];

    // Membuka koneksi
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn) {
        echo "";
    } else {
        echo "Error koneksi!";
        die(print_r(sqlsrv_errors(), true));
    }
?>