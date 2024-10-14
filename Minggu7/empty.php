<?php

$myArray = array();
if (empty($myArray)){
    echo"Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong";
}

echo "<br>";

if (empty($nonExtistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong";

} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}