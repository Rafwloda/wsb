<?php
    $text = <<<TEXT
        wsb - Wyższa
        szkoła
        bankowa
    TEXT;

    echo $text,'<hr>';
    echo nl2br($text);

    echo strtolower($text),'<br>';
    echo strtoupper($text),'<br>';
    echo ucfirst($text),'<br>';

    $text1 = 'anna Tomasz krystian';
    echo ucfirst($text1),'<br>';


    echo ucwords($text1),'<br>';

    $name = 'jAnUsz';
    $name = ucfirst(strtolower($name));
    echo $name,'<br>';


    // $lorem = <<<LOREM 
    //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet modi tenetur laudantium temporibus similique commodi adipisci nulla odio voluptatum rem suscipit, nostrum totam qui nam pariatur quis voluptas quibusdam sequi!Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet modi tenetur laudantium temporibus similique commodi adipisci nulla odio voluptatum rem suscipit, nostrum totam qui nam pariatur quis voluptas quibusdam sequi!
    // LOREM;

    // echo $lorem;

    //białe znaki
    $name = 'Kasia';
    $name1 = '    Kasia  ';

    // echo $name, $name1;
    echo strlen($name); //5
    echo strlen($name1),'<br>'; //8
    echo strlen(ltrim($name1)); //6
    echo strlen(ltrim($name1)); //7
    echo strlen(trim($name1)); //5
    $name1 = trim($name1);


?>