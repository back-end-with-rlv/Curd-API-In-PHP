<?php 



$con = mysqli_connect("localhost", "root", '', "api");

if(!$con){
    die("Connection failed:" . mysqli_connect_errno());
}else{
   echo "Connection successful";
}
