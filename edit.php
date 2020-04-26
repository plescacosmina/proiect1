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
	
	if (isset($_GET['produsid'])) {
    $produsid = $_GET['produsid'];
} else {
	$produsid=null;
}
	
	if ($_SESSION['loggedin']){
		//ok
	}
	else {
		header('location:admin-panel-login.php');
	}
	
	if ($produsid!=null){
	echo '
	<html>
    <head></head>
    <body>
        <div id="content"><form method="post" action="save.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
				<div>
					<input type="text" name="titlu" placeholder="titlu">
				</div>
                <div>
                    <textarea name="descriere" cols="40" rows="4" placeholder="descriere"></textarea>
                </div>

<div>
<input type="submit" name="upload" value="Upload Image">
                </div>
            </form>
        </div>
    </body>
</html>
	';
}
else {
	require_once'edit_case.php';
}

	
	

	?>
