<?php

    /*
        Variable Sistem
        Variable built in PHP (variable yang sudah ada di php)
    */
    echo $_SERVER["DOCUMENT_ROOT"];

    echo '<br><br>';

    /*
        Variable User
        Variable yang dibuat oleh user
    */
    $name = 'Man';
    $age = 15;
    $weight = 50.5;

    $name = 'Salman';

    echo "Nama saya adalah $name";


    /*
        Variable konstan
        Variable yang tidak bisa di ubah nilainya
        1. Menggunakan define | define ('fruit', "apel");
        2. Menggunakan const | const fruit = "Apel";
    */
    echo '<br><br>';
    define("SITE_NAME", "ELENA");
    echo SITE_NAME;
?>