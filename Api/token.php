<?php 

// thiis is token file for authentication user
include('db.php');
header('Content-Type:application/json');

if(isset($_GET['token'])){
  $token = mysqli_real_escape_string($con,$_GET['token']);
  // check token in table exists or no 
  $check_token = mysqli_query($con,"SELECT * FROM api_token WHERE token = '$token'");
  if(mysqli_num_rows($check_token) > 0 ){
    $token_result = mysqli_fetch_assoc($check_token);
      if($token_result['status'] == 1){
          
      }else{
          $status = 'true';
          $data   = 'API Toekn Deactivated';
          $codes = '3';
      }
  }else{
      $status = 'true';
      $data = 'Please Provide valid token';
      $codes = '2';
  }
}else{
    $status = 'true';
    $data = 'Please Provide Api Token';
    $codes = '1';
}
?>
