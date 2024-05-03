<?php 
#this file retrieves data from the table
// add token file 
include('token.php');

if(!isset($status)){
  $sql = "SELECT * FROM users";
  if(isset($_GET['id']) && $_GET['id'] > 0){
    $id = mysqli_real_escape_string($con,$_GET['id']);
    $sql .= " WHERE id = '$id' ";
  }
    $sql_result = mysqli_query($con,$sql);
    if(mysqli_num_rows($sql_result) > 0){
      $data = [];
      while($row = mysqli_fetch_assoc($sql_result)){
        $data[] = $row;
      }
      $status = 'true';
      $codes = '5';
    }else{
      $status = 'true';
      $data  = 'Data not found';
      $codes = '4';
    }
  }
  echo json_encode(["status"=>$status,"data"=>$data,"code"=> $code]);
