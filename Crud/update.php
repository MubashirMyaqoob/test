<?php 
include "db.php";
$id = $_GET['id'];
$q = "SELECT * FROM `regisrter` WHERE `id` = '$id'";
$run = mysqli_query($db,$q);
$simple = mysqli_fetch_assoc($run);
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
  <h2>Update</h2>
  <form  method="POST" enctype="multipart/form-data" >
    
    <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control" name="email" value=<?php echo $simple['email'] ?>>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value=<?php echo $simple['password'] ?>>
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
<?php 
  if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $e = $_POST['email'];
    $p = $_POST['pwd'];
    $q1 = "SELECT * FROM `regisrter` WHERE `email` = '$e' ";
    $run1 = mysqli_query($db,$q1);
    $count = mysqli_num_rows($run1);
    if ($count == 1) {
      echo "this email in already taken";
    }else{
    $q2= "UPDATE `regisrter` SET `email`='$e',`password`='$p' WHERE `id` = '$id'";
    $run2 = mysqli_query($db,$q2); 
    header('location: table.php'); 
    }
    
  }
 ?>