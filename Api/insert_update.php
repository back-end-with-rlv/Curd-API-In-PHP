<?php
include('token.php');
if(!isset($status)){
    if(isset($_POST['name']) && isset($_POST['email'])){
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);

        if(isset($_GET['id']) && $_GET['id']>0){
            $id=mysqli_real_escape_string($con,$_GET['id']);
            mysqli_query($con,"update users set name='$name', email='$email' where id='$id'");   
            $data ="Data updated";
            $codes ='10';
        }else{
            mysqli_query($con,"insert into users(name,email) values('$name','$email')");
            $data ="Data inserted";
            $codes ='8';
        }

        $status ='true';
    }else{
        $status ='true';
        $data ="Provide valid column count";
        $codes ='9';
    }
}
echo json_encode(["status"=>$status,"data"=>$data,"codes"=>$codes]);
?>
