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

$test1 = 3;
$test2 = 6;

if ($test1 == $test2){
    echo ("wel gelijk <br>");
}else {
    echo ("niet gelijk <br>");
}

if ($test1 != $test2){
    echo ("ongelijk <br>");
}else {
    echo ("gelijk <br>");
}


if ($test1 === $test2){
    echo ("identiek <br>");
}else {
    echo ("niet identiek <br>");
}

if ($test1 > $test2){
    echo ("test1 is groter dan test2 <br>");
}else {
    echo ("test1 is niet groter dan test2 <br>");
}

if ($test1 < $test2){
    echo ("test1 is kleiner dan test2 <br>");
}else {
    echo ("test1 is niet kleiner dan test2 <br>");
}

if ($test1 >= $test2){
    echo ("test1 is groter of gelijk aan test2 <br>");
}else {
    echo ("test1 is niet groter of gelijk aan test2 <br>");
}

if ($test1 <= $test2){
    echo ("test1 is kleiner of gelijk aan test2 <br>");
}else {
    echo ("test1 is niet kleiner of gelijk aan test2 <br>");
}



?>




</body>
</html>