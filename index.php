<?php 
require 'guestbook.php';
require 'post.php';
require 'entries.json';
echo'guestbook';




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook</title>
</head>
<body>
<form action=""  method="post">


    <label >Date</label>
    <input type="text" name="Date"><br><br>

    <label >title</label>
    <input type="text" name="Title"><br><br>

    <label>Content</label>
    <input type="text" name="content"><br>

    <label>Guest Name</label>
    <input type="text" name="guestName"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>