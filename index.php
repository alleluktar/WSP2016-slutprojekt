<?php
session_start();
require('header.php');
//Code to decide files to include from get variable.

if(isset($_GET['page'])&&($_GET['page']!="")) {
    $page = $_GET['page'];

    if (file_exists("{$page}.php")) {
        require("{$page}.php");}
        else
        require('main.php');

    } // else require('views/main.php');
else{  require('main.php');}

    require('footer.php');
