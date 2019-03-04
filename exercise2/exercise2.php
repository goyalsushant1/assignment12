<!DOCTYPE html>
<?php
   $name = "name";
   $cookie_owner = "Sushant Goyal";
   $expiry = time()+3600;
   setcookie($name,$cookie_owner,$expiry);
   setcookie("age", "21", time()+3600, "/", "",  0);
   echo "<h3>Cookies Created</><br>";
?>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Create Cookie</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css">
   <script src="main.js"></script>
</head>
<body>
</body>
</html>