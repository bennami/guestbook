# PHP Guestbook challenge

[leave me an entry on the guestbook!](https://guestbookphp.herokuapp.com/)

## Learning objectives
- Storing data in files
- Converting complex constructs (array/objects) to string representation.

## The Mission
Build a guestbook using  a json to store  data instead of any database


## Must-have features
- Posts must have the following attributes:
    * Title
    * Date
    * Content
    * Author name
    
- Use at least 2 classes: Guestbook & Post
- The messages are sorted from new (top) to old (bottom).
- Make sure the script can handle [site defacement attacks](https://en.wikipedia.org/wiki/Website_defacement): use [htmlspecialchars()](https://www.php.net/htmlspecialchars)
- Only show the latest 20 posts.

## Nice to have features
- Profanity filter: at the top of your script create an array of "bad" words. If somebody tries to enter a message with those words, their messages gets rejected.

- When the user enters uses a "smily" like ":-)", ";-)", ":-(" replace it with an image of such a smily.

- Have an input field where the user can enter how many message he wants to see displayed.
