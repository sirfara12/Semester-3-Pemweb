<html>
<head>
</head>
<body>
    <h2>Keranjang Belanja</h2>
    <?php
    $beliNovel = isset($_COOKIE["beliNovel"]);
    $beliBuku = isset($_COOKIE["beliBuku"]);


    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku;
    ?>
</body>
</html>