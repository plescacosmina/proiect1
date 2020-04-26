<?php 
session_start();
require "conn.php";

$flag_permission=true;
  if(isset($_POST['comment']) && isset($_POST['produsid']) ){
	  
  }
  else {
	  $flag_permission=false;
	  }

  if ($flag_permission){
	  if (strlen($_POST['comment'])>0){
		  //echo ' comment lenght >0';
	  }
	  else {
		  $flag_permission=false;
		  echo 'length=0 <br> comment cant be empty';
	  }
	  
  }

  if($flag_permission)
  {
$produsid = $_POST["produsid"];
$comment = $_POST["comment"];

$mysql_qry = "insert into comments (produsid,comment) values ('$produsid','$comment')";

if($con->query($mysql_qry)===TRUE) {
echo "Comment succesfully added!";
echo '<br> <a href="/proiect/produs.php?produsid=';
echo $produsid;
echo'">Click here to return to product page</a>';

}
else {
echo "Error: " . $mysql_qry . "<br>" . $con->error;
}
 $con->close();
        echo '<br> <a href="/register.php">click here to return to the homepage</a>';
        	header('Location: '."/old-htdocs/proiect/produs.php?produsid=".$produsid);
	exit();

  }
  else {
      echo '<br>Permission Denied';
	  header('Location: '."old-htdocs/proiect/index.php");
  }
?>