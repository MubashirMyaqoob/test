<?php 
include "db.php";
$q= "SELECT * FROM `regisrter`";
$run = mysqli_query($db,$q) 
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
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Password</th>
        <th>Image</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while($simple = mysqli_fetch_assoc($run)){
       ?>
      <tr>
        <td><?php echo $simple['name']; ?></td>
        <td><?php echo $simple['email']; ?></td>
        <td><?php echo $simple['password']; ?></td>
        <td><img src="<?php echo $simple['img']; ?>" style="height: 100px; width:100px;"></td>
        <td><a href="update.php?id=<?php echo $simple['id'] ?>"><button class="btn btn-primary">Update</button></a></td>
        <form method="POST">
          <input type="hidden" name="id" value="<?php echo $simple['id']; ?>">
        <td><button class="btn btn-danger" type="submit" name="submit">Delete</button></td>
        </form>
      </tr>
      <?php }

        if (isset($_POST['submit'])) {
           $id = $_POST['id']; 
           $q1= "DELETE FROM `regisrter` WHERE `id` ='$id' ";
           $run1 = mysqli_query($db,$q1);
           header('location:table.php');
         } ?>
    </tbody>
  </table>
</div>

</body>
</html>
