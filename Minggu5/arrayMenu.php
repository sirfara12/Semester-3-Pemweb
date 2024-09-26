<?php
   /* $menu = array(
        "Home" =>  "#home",
        "About Us" => array(
            "Out Team" => "#team",
            "Our Story" => "#story",
            "Mission & Vision" => "#mission"
        ),
        "Services" => array(
            "Web Development" => "#web",
            "Mobile Development" => "#mobile",
            "SEO Optimization" => "#seo"

        ),
        "Contact" => "#contact"
    );

    function displayMenu($menu) {
        echo "<ul>";
        foreach ($menu as $key => $value) {
            if(is_array($value)){
                echo "<li>$key";
                displayMenu($value);
                echo "</li>";
            } else{
                echo "<li><a href='$value'>$key</a></li>";
            }
        }
        echo "</ul>";
    }
    displayMenu($menu);
*/

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    ["nama" => "Pantai"],
                    ["nama" => "Gunung"]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu, $indent = 0) {
    foreach ($menu as $item) {
       
        if (isset($item['subMenu'])) {
            $symbol = '●'; 
        } else {
            $symbol = '■'; 
        }
        echo str_repeat("&nbsp;", $indent * 4); 
        echo $symbol . ' ' . $item['nama'] . "<br>"; 

        if (isset($item['subMenu'])) {
            tampilkanSubMenu($item['subMenu'], $indent + 1);
        }
    }
}

function tampilkanSubMenu(array $subMenu, $indent) {
    foreach ($subMenu as $item) {
        echo str_repeat("&nbsp;", $indent * 4); 
        echo 'o ' . $item['nama'] . "<br>"; 
       
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], $indent + 1); // Tambahkan indentasi
        }
    }
}


tampilkanMenuBertingkat($menu);

?>