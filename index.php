<?php
require_once ('Model/post.php');
require_once ('Model/guestbook.php');

require 'Controller/homepageController.php';

$controller = new  homepageController();
$controller->render();
