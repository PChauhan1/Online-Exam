<?php
$con = mysqli_connect('localhost','root','','online_exam');
if(!$con){
    die("connection failed due to" . mysqli_connect_error());
}
?>