<?php

    //operatory bitowe
    //and &, or |, not ~, xor ^, <<, >>

    $x = 0b1010;

    echo "$x<br>";

    // porównanie === <=>

    $x=1;
    $y=1;

    if ($x == $y) {
        echo '$x jest rrówna $y<br>';
    } else {
        echo '$x nie jest równa $y<br>';
    }

    if ($x === $y) {
        echo '$x jest  identyczna $y<br>';
    } else {
        echo '$x nie jest identyczna $y<br>';
    }

    echo gettype($x);
    echo gettype($y),'<hr>';

    $x=-10;
    $y=1;

    echo $x<=>$y;
    echo '<hr>';

    $x=2;
    $x=$x++;
    echo $x;
    $y=$x++;
    echo $y;
    echo $x;

    //operatory rzutowania
    //bool, int, float, string, array, object, unset

    $x = '123abc45';
    echo "$x<br>";
    echo 'typ danych $x: ',gettype($x),'<br>';
    $x = (int)$x;
    echo "$x<br>";
    echo 'typ danych $x: ',gettype($x),'<hr>';

    $x = 10;
    echo "$x<br>";
    echo 'typ danych $x: ',gettype($x),'<br>';
    $x = (float)$x;
    echo "$x<br>";
    echo 'typ danych $x: ',gettype($x),'<hr>';

    $x = 10;
    echo "$x<br>";
    echo 'typ danych $x: ',gettype($x),'<br>';
    $x = (unset)$x;
    echo "$x<br>";
    echo 'typ danych $x: ',gettype($x),'<hr>';

    // rozmiar typu integer
    echo PHP_INT_SIZE,'<br>'; //8B

    // kontrola typu zmiennych
    //is_int(), is_float(), is_numeric(), is_bool(), is_null()
    $x = 1;
    echo is_numeric($x);

    $w;
    // operator ignorowania błędów "@"
    echo gettype($w);

    // stała predefiniowana
    echo PHP_VERSION,'<br>';
    $ver = PHP_VERSION;
    if ($ver > 7.4) {
        echo 'nowa wersja php';
    } else {
        echo 'stara wersja php';
    }

    //stałe
    //nazwy z dużych liter
    define('NAME', 'Janusz');
    echo NAME;











?>