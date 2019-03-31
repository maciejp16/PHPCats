
<?php  
  
  // code to illustrate for loop 
  for ($num = 1; $num <= 10; $num += 2) { 
      echo "$num \n"; 
  }  
    
  ?> 

<?php 
  
  // PHP code to illustrate while loops 
  $num = 2; 
    
  while ($num < 12) { 
      $num += 2; 
      echo $num, "\n"; 
  } 
    
  ?> 
  
  
<?php 
  
  $arr = array (10, 20, 30, 40, 50, 60); 
  foreach ($arr as $val) {  
      echo "$val \n"; 
  } 
    
  $arr = array ("Ram", "Laxman", "Sita"); 
  foreach ($arr as $val) {  
      echo "$val \n"; 
  } 

?> 
