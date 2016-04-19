<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 2016-04-05
 * Time: 12:55
 */

<?php
session_start();
require('header.php');
//Code to decide files to include from get variable.

if(isset($_GET['page'])&&($_GET['page']!="")) {
    $page=$_GET['page'];

    if (file_exists("views/{$page}.php"))  {
        require("views/{$page}.php");}
    else require('views/main.php');

}

else require('views/main.php');

require('footer.php');
