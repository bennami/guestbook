<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Assets/main.css">
    <title>Guestbook</title>
</head>
<body>
<h1>GUESTBOOK</h1>

<form class="container-form" method="post">
    <h2>Leave us a lovely comment</h2>
    <label >Date</label>
    <input type="text" name="Date" placeholder="date"><br><br>

    <label >title</label>
    <input type="text" name="Title"  placeholder="title "><br><br>

    <label>Content</label>
    <input type="text" name="Content"  placeholder="write your message here"><br>

    <label>Guest Name</label>
    <input type="text" name="GuestName" placeholder="Guest name"><br><br>
    <button type="submit" name="submit" value="Submit">
submit
    </button>
</form>



<div class="container-guestbook">
    <h1> Our lovely clients</h1>
    <?php

    if (isset($arrReverse)) {
        foreach ($arrReverse as $guest){
           echo '<div class="guest-entry">';
            echo '<p> <span>Date:</span> ' . $guest['Date'] . '</p>';
            echo '<p> <span>Title:</span> ' . $guest['Title'] . '</p>';
            echo '<p> <span>Content:</span> ' . $guest['Content'] . '</p>';
            echo '<p> <span>Name of Guest:</span> ' . $guest['Guest Name'] . '</p>' ;
           echo '</div>';
        }
    }else {
        foreach ($entireThing as $guest) {
           echo '<div class="guest-entry">';
            echo '<p> <span>Date:</span> ' . $guest['Date'] . '</p>';
            echo '<p> <span>Title:</span> ' . $guest['Title'] . '</p>';
            echo '<p> <span>Content:</span> ' . $guest['Content'] . '</p>';
            echo '<p> <span>Name of Guest:</span> ' . $guest['Guest Name'] . '</p>' ;
           echo '</div>';
        }
    }
     ?></div>
</body>
</html>