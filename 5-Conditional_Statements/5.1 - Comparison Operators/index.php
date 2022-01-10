<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tekst1 = 10;
    $tekst2 = "hallo";

    var_dump($tekst1 == $tekst2);
    echo "<BR>";
    var_dump($tekst1 === $tekst2);
    echo "<BR>";
    var_dump($tekst1 != $tekst2);
    echo "<BR>";
    var_dump($tekst1 > $tekst2);
    echo "<BR>";
    var_dump($tekst1 < $tekst2);
    echo "<BR>";
    var_dump($tekst1 <> $tekst2);
    echo "<BR>";
    var_dump($tekst1 >= $tekst2);
    echo "<BR>";
    var_dump($tekst1 <= $tekst2);
    
    
    
    ?>
</body>
</html>