<?php
/// connection to database in php 
$con=mysqli_connect('localhost','root','','crudseries');
///condition to check if connection sucessfull or not
if(!$con){
    die(mysqli_error($con));
}


?>