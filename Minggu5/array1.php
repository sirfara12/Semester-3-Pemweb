<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
        $ListDosen=["Elok hamdana", "Unggul pemenang", "Bagas Nugraha"];

        echo "Elok hamdana <br>";
        echo "Unggul pemenang <br>";
        echo "Bagas Nugraha <br>";
        echo "<br><br>";
        echo $ListDosen[2] . "<br>";
        echo $ListDosen[0] . "<br>";
        echo $ListDosen[1] . "<br>";
        echo "<br>";
        foreach ($ListDosen as $dosen) {
            echo $dosen . "<br>";
        }
        ?>
        </body>
        </html>