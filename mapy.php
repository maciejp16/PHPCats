<?php
// One way to create an associative array 
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any",  
                  "Ram"=>"Rani", "Salim"=>"Sara",  
                  "Raghav"=>"Ravina","Maciej"=>"Pięta","Bob" => "Bob");
                  
$name_one["Marye"] = "Marye";

foreach ($name_one as $val => $val_value){ 
    echo "Husband is ".$val." and Wife is ".$val_value."<br/>";
}


                  $round = count($name_one); 
echo "<br/>The number of elements are $round <br/>"; 

?>