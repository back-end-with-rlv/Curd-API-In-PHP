<?php
$msg="";
$name="";
$email="";
if(isset($_POST['submit'])){  
    $arr['name']=$_POST['name'];
    $arr['email']=$_POST['email'];
    $id="";
    if(isset($_GET['id']) && $_GET['id']>0){
        $id=$_GET['id'];
    }
    $url="http://localhost/Api/insert_update.php?token=sadsadasdadasdasdasd&id=".$id;
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
    curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    $msg=$result['data'];
}

if(isset($_GET['id']) && $_GET['id']>0){
    $url="http://localhost/Api/index.php?token=sadsadasdadasdasdasd&id=".$_GET['id'];
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $result=curl_exec($ch);
    curl_close($ch);
    $result=json_decode($result,true);
    if(isset($result['status']) && isset($result['code']) && $result['code']==5){
        $name=$result['data']['0']['name'];
        $email=$result['data']['0']['email'];
    }else{
        header('location:index.php');
        die();
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>API Crud Operation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="hit_api.php">User</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a href="index.php" class="nav-link btn btn-outline-primary" type="button">Back</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container w-50 mt-5">
        <?php echo $msg?>
<form method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
   <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" required value="<?php echo $name?>">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
   <input type="email" class="form-control" id="nombre" name="email" placeholder="Enter email" required value="<?php echo $email?>">
  </div>
 <input type="submit" value="Submit" class="btn btn-info btn-block" name="submit">
</form>
    
</div>
</body>
</html>
