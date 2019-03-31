<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Globals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<?php 
echo implode(" echo_GET <br> ", $_GET);
echo implode(" echo_POST", $_POST);
echo "login:".$_GET['login'];
?>



<?php 
echo $_SERVER['PHP_SELF']; 
echo "<br>"; 
echo $_SERVER['SERVER_NAME']; 
echo "<br>"; 
echo $_SERVER['HTTP_HOST']; 
echo "<br>"; 
echo $_SERVER['HTTP_USER_AGENT']; 
echo "<br>"; 
echo $_SERVER['SCRIPT_NAME']; 
echo "<br>"
?>
    
</body>
</html>
