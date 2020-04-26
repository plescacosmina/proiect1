<?php
session_start();
require_once 'conn.php';
$flag_permission = true;
$num_rows = 0;
require_once'produs-class.php';
require_once'comment-class.php';
if (
        $_SERVER['REQUEST_METHOD'] === 'GET'
) {
} else {
    $flag_permission = false;
    $fname = 0;
}
if (isset($_GET['produsid'])) {
    $produsid = $_GET['produsid'];
} else {
    $flag_permission = false;
    $fname = 1;
}


require_once 'conn.php';
?>
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
<div role="main" class="ui-content jqm-content">
                <?php
                if ($_GET['produsid'] == null) {
                    require_once 'index.php';
                } else {
                    // from here to
                    if (
                            $flag_permission
                    ) {


						$mysql_qry = "SELECT 
						 * 
						FROM `img` where id='" . $produsid . "';";
						
						$result = mysqli_query($con, $mysql_qry);

                        if (mysqli_num_rows($result) > 0) {

                            while ($row = $result->fetch_assoc()) {
                    
                                if (isset($_GET['message'])) {
                                    echo'<div style="background-color:#2ecc71;">';
                                    echo '<p style="color:#red;"><b>';
                                    //echo $_GET['message'];
                                    echo '</b></p>';
                                    echo '</div>';
                                }
                                
								
                                echo '<h1 style="text-align:center;color:black;"><b>';
								$produs= new Produs($row['images'],$row['descriere'],$row['title']);
                                //$produs.setTitle($row['title']);
								//$produs.setDescriere($row['descriere']);
								//$produs.setImages($row['images']);
								
								//echo $row['title'];
								$produs->getTitle();
								
								echo '</b></h1>';
                                //echo '<h2 style="color:orange;"><b> phone number : ';
                                //echo $row['phone_number'];
                                echo '</b></h2>';
                                //echo '<h2 style="color:orange;"><b> email address : ';
                                //echo $row['email'];
                                echo '</b></h2>';


                                echo '<p>';
                                echo $row['descriere'];
                                echo '<h2></h2>'; // h2 has border bottom gray
                                echo '<h2 style="border-bottom:0px;margin:0px;padding:0px;"><b>images</b></h2><br>';
                                echo '<h2></h2>';
                                $pos = false;
                                $mysql_qry = "select * from img where id = '" . $produsid . "';";
                                $result = mysqli_query($con, $mysql_qry);
                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = $result->fetch_assoc()) {
                                        echo '<a href="';
                                        echo $row['images'];
                                        echo '" target="_blank"><img src="http://localhost/old-htdocs/proiect/';
                                        echo $row['images'];
                                        echo '" style="max-width:100%;max-height:100%;border:1px solid black; margin-bottom:20px"></img></a>';
                                    }
                                }
                                //till here images
                                echo '<h2></h2>';
                            }
							
							//comments from here
							    echo '<h1 style="text-align:center;color:black;"><b>Comments</b></h1><h2></h2>';
                                
						$mysql_qry = "SELECT * FROM comments where produsid = '" . $produsid . "';";
                                $result = mysqli_query($con, $mysql_qry);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = $result->fetch_assoc()) {
										$comment= new Comment($row['id'],$row['produsid'],$row['comment']);
                                        echo '<br>';
                                        echo '<h2 style="color:orange;border:0px;"><b> from user : unknown ';
                                        echo '<br>';
                                        echo '</b></h2><p style="color:black;size=1px;">';
                                        //echo $row['comment']; 
										$comment->getComment();
                                        echo '</p>';
										
                                        echo '<h2></h2>'; // line 
										

										
										
                                        }
                                }
								
				echo '<form action = "addcomment_script.php" onsubmit="return checkform(this);"method = "post" target="_self">
                  
                  <label>add comment here :</label>
                  <input style="display:none;" type="radio" name="produsid" value="';
                  echo $produsid;
                  echo'
                  " checked>
                  <br>
                  <textarea style="width:775px;" cols="40" rows="8" name="comment"></textarea>
				  <br/>

				  				  <!-- START CAPTCHA -->
								  <center>
								  				  <label> Captcha</label>
<br>
<div class="capbox">

<div id="CaptchaDiv"></div>

<div class="capbox-inner">
Type the above number:<br>

<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

</div>
</div>
<br><br>
</center>
<!-- END CAPTCHA -->
				  
				  <br/>
                  <center><input type = "submit" value = " Submit Comment"/></center>
				  <br />


               </form>';
			   ?>
			   <script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>
<?php
              

                        } else {
                            $flag_permission = false;
                            echo "0 results";
                        }




                        $con->close();
                    } else {
                        echo 'permission denied !';
                        echo $fname;
                    }
                    
                }


                ?>
            </div>


<div id="categories">

<div id="footer">
<img src="img/cards.jpg" alt="" height="20" width="141" />
<p><a href="#">HOME</a> | <a href="#">ABOUT
US</a> | <a href="#">SERVICES</a> | <a href="#">PRODUCTS</a> | <a href="#">SUPPORT
INFO</a> | <a href="#">NEWS &amp; EVENTS</a>
| <a href="#">CONTACTS</a><br />
Copyright © Your Company Name. Designed by <a href="http://www.templatesland.com">TemplatesLand.com</a></p>
<p><a href="http://www.templatesland.com">Supported by </a><a href="http://www.hosting24.com/" target="_blank">Hosting24.com</a></p>
</div>
 
</body>
</html>

