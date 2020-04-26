   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Music Store</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

 
<body>

    <?php
    require_once 'header.php';
    ?>
    
<div id="content">
<div id="leftPan">
<div id="categories">
    <h2></h2>
    
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
		


	
	if ($loggedin){
	    header("Location:admin-panel.php");
	}
    else {

		echo '
    <form name="form" method="post" action="login.php">
   <table border="0" cellpadding="10" cellspacing="1"  align="center">
        <tr>
            <td align="center" colspan="2">Enter Login Details</td>
        </tr>
        <tr>
            <td align="right">Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td align="right">Password</td>
            <td><input type="password" name="password"></td>
        </tr>
		
		        <tr>
            <td align="right">Remember login for 30 days</td>
            <td><input type="checkbox" name="remember" value="remember"/><br></td>
        </tr>
		

		
        <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
	';
	}
 
 ?>
 
 
 %<div id="footer">
%<img src="images/cards.jpg" alt="" height="20" width="141" />
%<p><a href="#">HOME</a> | <a href="#">ABOUT
US</a> | <a href="#">SERVICES</a> | <a href="#">PRODUCTS</a> | <a href="#">SUPPORT
INFO</a> | <a href="#">NEWS &amp; EVENTS</a>
| <a href="#">CONTACTS</a><br />
Copyright © Your Company Name. Designed by <a href="http://www.templatesland.com">TemplatesLand.com</a></p>
<p><a href="http://www.templatesland.com">Supported by </a><a href="http://www.hosting24.com/" target="_blank">Hosting24.com</a></p>
</div>
 
</body>
</html>

