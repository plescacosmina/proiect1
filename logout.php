 <?php
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
$cookie_name = "loggedin";
$cookie_value = false;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day //30 zile acu
header("Location:admin-panel-login.php");
?>