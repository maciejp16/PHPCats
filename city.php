<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
</head> 
<body bgcolor="cyan">	 
	<?php
		$name = $_GET['name']; 
        $city = $_GET['city']; 
        if($name=="luk"){
            $image = "https://www.focus.pl/media/cache/default_view/uploads/media/default/0001/01/4450a2005c9c14f481e26f291250fb2d2f09b3c4.jpeg";
        }
        else{
            $image = "http://koraty.pl/wp/wp-content/uploads/2014/02/N037632-kw3.jpg";
        }
        echo "<img src= ".$image." />";
		echo "<h1>This is ".$name." of ".$city."</h1><br>"; 
	?> 
	<img src = "$image" alt = "nanilake" height = "400" width="500" /> 
</body> 
</html> 
