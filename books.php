<?php
class Books{
    
    //* Zmienne książki *//
        var $title;     //*Tytuł*//
        var $author;    //*Autor*//
        var $price;     //*Cena*//

    function setPrice($par){
        $this->price = $par;
    }
    
    function getPrice(){
        return $this->price;
    }

    function __construct($t,$a){
        $this->title = $t;
        $this->author = $a;
    }
}

$history = new Books("Jan Matejko","Akademia Pana Kleksa");
$maths = new Books("Hubert Mrożek","Ziemia jest okrągła, ale czy napewno?");
$chemistry = new Books("Bartek Nort","Bombowe Eksperymenty");

?>
