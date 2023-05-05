<?php 
$db = mysqli_connect('localhost','root','','eshop');
@session_start();


 ?>


 <?php 
							// $q1 = "WITH productid as (SELECT UNNEST(ARRAY[4,2,5]) as pid) SELECT `ordertable`.pid,count(*) as oc FROM `ordertabel`JOIN productid on ordertable.pid = productid.pid GROUP BY ordertabel.pid ORDER BY oc DESC LIMIT 10;"
							// $r = mysqli_query($db, $q1);
							
							// while ($d = mysqli_fetch_assoc($r)) {
							// print_r($d);
							// }
							 ?>