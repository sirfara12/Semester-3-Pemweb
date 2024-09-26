<?php
 /*$pesan = "Saya arek pasuruan";
 echo strrev($pesan) . "<br>";*/


$pesan = "saya arek pasuruan";
$pesanPerkata =  explode(" ", $pesan);
$pesanPerkata = array_map(fn($pesan) => strrev($pesan), $pesanPerkata);
$pesan = implode(" ", $pesanPerkata);

echo $pesan . "<br>";
 ?>