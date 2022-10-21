<?php


// connect to the database
$place=mysqli_connect('localhost','root','','simple');


// get from data
$name=$_POST['name'];
$email=$_POST['email'];
$pws=$_POST['password'];
$city=$_POST['city'];
$zip=$_POST['zip'];
$url=$_POST['url'];


// injucting form values to database table
$query="INSERT INTO formdata(Name,Email,Password,City,code,url) 
VALUES 
('$name',
'$email',
'$pws',
'$city',
'$zip',
'$url')";

$run=mysqli_query($place,$query) OR die(mysqli_error($place));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
      
</h1>
</body>
</html>