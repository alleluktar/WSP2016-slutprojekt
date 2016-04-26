<?php
session_start();

if(isset($_POST['exampleInputEmail1'])&&isset($_POST['exampleInputEmail1'])) {


    $email=$_POST['exampleInputEmail1'];
    $password=$_POST['exampleInputPassword1'];

    echo $email;
    echo $password;


    //Login example user - just for test.....

    $_SESSION['username']="ExampleUser";

    $_SESSION['email']=$email;

    //Send user back to index.php
    header("Location:index.php");
}
