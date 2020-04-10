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
<h1>GUESTBOOK</h1>
<h2>Leave us a lovely comment</h2>
<form  method="post">

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
<h1> Our lovely clients</h1>


<div>
    <?php

    if (isset($arrReverse)) {
        foreach ($arrReverse as $guest){
            echo '<hr> Date: '.$guest['Date'].'<br>';
            echo 'Title: '. $guest['Title'].'<br>';
            echo 'Content: '. $guest['Content'].'<br>';
            echo 'Name of Guest: '. $guest['Guest Name'].'<br>'.'<br><hr>';
        }
    }
     ?></div>
</body>
</html>