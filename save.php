<?php
	session_start();
		$loggedin=false;
	
	if (isset($_SESSION['loggedin'])) {
		if ($_SESSION['loggedin']){
    $loggedin=true;
		}
} else {
    $_SESSION['loggedin'] = false;
}
	
	if (!$loggedin){
		if(isset($_COOKIE['loggedin'])) {
    if ($_COOKIE['loggedin']){
		$_SESSION['loggedin']=true;
		$loggedin=true;
	}
}
	}
	if ($_SESSION['loggedin']){
require_once "conn.php";
$msg="";
if(isset($_POST['upload'])){
$target="./img/".md5(uniqid(time())). basename($_FILES['image']['name']);
   $titlu=$_POST['titlu'];
   $descriere=$_post['descriere'];
    $sql="INSERT INTO img(title, descriere, images)VALUES('$titlu','$descriere','$target')";
    mysqli_query($con,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
       header('location:index.php');
    }else{
        $msg="Vai! Vai! Vai!!!";
    }
}
	}
	
	
	else {	
		header('location:admin-panel-login.php');
	}
	?>