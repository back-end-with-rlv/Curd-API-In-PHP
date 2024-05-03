<?php
$url="http://localhost/Api/index.php?token=sadsadasdadasdasdasd";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
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
    <a class="navbar-brand" href="#">User</a>
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
          <a href="form.php" class="nav-link btn btn-outline-primary" type="button">Add User</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container w-50">
   
            <?php
            if(isset($result['status']) && isset($result['code']) && $result['code']==5){
                ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>	
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach($result['data'] as $list){
                            ?>
                            <tr>
                                <td><?php echo $list['id']?></td>
                                <td><?php echo $list['name']?></a></td>
                                <td><?php echo $list['email']?></td>
                                <td>
                                <a href="form.php?id=<?php echo $list['id']?>" class="edit" title="Edit"><i class="material-icons colorize">&#xe3b8;</i></a>
                               <a href="delete.php?id=<?php echo $list['id']?>" class="delete" title="Delete" style="color: red;" onclick="return confirm('Are you sure you want to delete?');"><i class="material-icons">&#xE5C9;</i></a>

                                </td>
                            </tr>
                            <?php        
                        }
                        ?>
                    </tbody>
                </table>
                <?php
            }else{
                echo $result['data'];
            }
            ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 	
</body>
</html>
