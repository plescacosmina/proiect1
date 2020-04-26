 <?php
session_start();
$user = '111';
$pass = '222';
$message="";



if((!(empty($_POST["username"])))||(!(empty($_POST["password"])))){
    if(($_POST["username"]==$user)&&($_POST["password"]==$pass)){
        $_SESSION["user_name"] = $_POST["username"];
if (isset($_POST['remember'])){
	if ($_POST['remember']=='remember'){
			$cookie_name = "loggedin";
		$cookie_value = true;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day //30 zile acu
        header("Location:admin-panel.php");
}
}
    } else {
        $message = "Invalid Username or Password!";
    }
}else{
    header("location:admin-panel-login.php");
}
echo $message;
?>