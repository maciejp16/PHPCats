<!DOCTYPE html> 
<html> 
<body> 

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<label for="name">Please enter your name: </label> 
<input name="name" type="text"><br> 
<label for="age">Please enter your age: </label> 
<input name="age" type="text"><br> 
<input type="submit" value="Submit" name="43"> 

</form> 
<?php
if(isset($_POST["43"])){
$nm=$_POST['name']; 
$age=$_POST['age']; 
echo "<strong>".$nm." is $age years old.</strong>"; 
}
?>
</body> 
</html> 
