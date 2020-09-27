<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    poczatek pliku
    <?php
    $name = 'Anna';
        include '.\3_files\file.php';
        include_once '.\3_files\file.php';

        echo 'REquire:<br>';
        require '.\3_files\file.php';
        require_once '.\3_files\file.php';

    ?>




    koniec pliku
</body>
</html>