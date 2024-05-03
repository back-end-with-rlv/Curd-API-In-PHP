<?php 
include('token.php');

if(!isset($status)){
  if(isset($_POST['id']) && $_POST['id'] > 0){
    $id = mysqli_real_escape_string($con,$_POST['id']);
    mysqli_query($con, "DELETE FROM  users WHERE id = '$id' ");

    $status = 'true';
    $data = 'Data Deleted';
    $codes = '7';
  }else{
    $status = 'true';
    $data = 'Provide id ';
    $codes = '6';
  }
}
echo json_encode(['status'=>$status, 'data'=>$data, 'codes'=>$codes]);
