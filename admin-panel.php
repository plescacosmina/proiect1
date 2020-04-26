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
		if(isset($_COOKIE['loggedin'])) {//verificare daca exista cookie
    if ($_COOKIE['loggedin']){ //verifica true sau false
		$_SESSION['loggedin']=true;
		$loggedin=true;
	}
}
	}
	
	if ($_SESSION['loggedin']){
    echo "Welcome Admin<br/>";
	
	echo "<a href='upload.php'>add product</a><br/>";
	
	echo "<a href='edit.php'>edit product</a><br/>";
	
	
	
	echo" Click here to <a href='logout.php'>Logout.";
} else{
    header("Location:admin-panel-login.php");
}
?>