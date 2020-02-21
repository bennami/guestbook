<?php
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'guestbook.php';
//require 'entries.json';

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
    <input type="text" name="Content"><br>

    <label>Guest Name</label>
    <input type="text" name="GuestName"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<div><?php ?></div>
</body>
</html>