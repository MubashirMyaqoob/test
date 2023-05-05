<?php 
include "db.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<script type="text/javascript">
 		function showUser(str){
 			if (str == "") {
 				document.getElementById("txtHint").innerHTML = "";return;
 			}else{
 				var xmlhttp = new XMLHttpRequest();
 				xmlhttp.onreadystatechange = function(){
 					//holds the status of the XMLHttpRequest.
 					//0: request not initialized
 					//1: server connection established 
 					//2: request received
 					//3: processing request
 					//4: request finished and response is ready

 					//status 
 					//200:"ok"
 					//400:"forbidden"
 					//404: "Page not found"

 					//statusTexr Returns the status.text (e.g. "ok" or "not found")

 					if (this.readyState == 4 && this.status == 200) {
 						document.getElementById("txtHint").innerHTML = this.responseText;
 					}
 				};
 				xmlhttp.open("GET","ajax2.php?q="+str,true);
 				xmlhttp.send();
 			}
 		}

 	</script>
 </head>
 <body>
 
<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a person</option>
  

<?php 
$q = "SELECT * FROM `user`";
$run = mysqli_query($db,$q);
while ($simple = mysqli_fetch_assoc($run)) {
	$id = $simple['id'];
	$username = $simple['name'];
	echo "<option value = '$id'> $username</option>";
}

 ?>
</select>
 </form>
 <br>
 <div id="txtHint">person info will be listed here</div>
 </body>
 </html>