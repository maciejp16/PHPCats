<?php 
// Defining a multidimensional array 
$favorites = array( 
    "Dave Punk" => array( 
        "mob" => "5689741523", 
        "email" => "davepunk@gmail.com", 
    ), 
    "Dave Dank" => array( 
        "mob" => "2584369721", 
        "email" => "montysmith@gmail.com", 
    ), 
    "John Flinch" => array( 
        "mob" => "9875147536", 
        "email" => "johnflinch@gmail.com", 
    ),
    "Maciej Pięta" => array( 
        "mob" => "4535425423", 
        "email" => "bobmarleyh@gmail.com",
    ),
); 
  
// Using for and foreach in nested form 
$keys = array_keys($favorites); 
for($i = 3; $i < count($favorites); $i++) { 
    echo $keys[$i] . "<br/>"; 
    foreach($favorites[$keys[$i]] as $key => $value) { 
        echo $key . " : " . $value . "<br/>"; 
    } 
    echo "<br/>"; 
} 
  
?> 
