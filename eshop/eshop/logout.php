<?php 
session_destroy();
setcookie("email","",time(),"/");
header("location:index.php");
 ?>