<?php
require 'Model/Post.php';
require 'Model/guestbook.php';

require 'Controller/homepageController.php';

$controller = new  homepageController();
$controller->render();
