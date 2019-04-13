<?php

require("books.php");

$history = new Books("Jan Matejko ","Akademia Pana Kleksa");
$maths = new Books("Hubert Mrożek ","Ziemia jest okrągła, ale czy napewno?");
$chemistry = new Books("Bartek Nort ","Bombowe Eksperymenty");

echo $maths->title."<b>";
echo $maths->author;


?>