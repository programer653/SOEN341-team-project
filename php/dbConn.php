<?php

$db = mysqli_connect("localhost", "root", "", "product table");

if(!$db){
    die("ERROR: Fail to connect localhost database!" . mysqli_connect_error());
}

//$connect = mysqli_connect("localhost", "root", "") or die(mysqli_error());
//mysqli_select_db("soen341", $connect) or die(mysqli_error());

?>


