<?php 
include "db.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form  method="POST" enctype="multipart/form-data" >
    <div class="form-group" >
      <label >Name:</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label >Img:</label>
      <input type="file" class="form-control" name="img">
    </div>
    
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
<?php 
  if (isset($_POST['submit'])) {
    $e = $_POST['email'];
    $p = $_POST['pwd'];
    $n = $_POST['name'];
    $img = $_FILES['img']['name'];
    $location = $_FILES['img']['tmp_name'];
    $destination = "img/$img";
    move_uploaded_file($location, $destination);
    $q = "INSERT INTO `regisrter`(`name`, `email`, `password`, `img`) VALUES ('$n','$e','$p','$destination')";
    $run = mysqli_query($db,$q);
  }
 ?>