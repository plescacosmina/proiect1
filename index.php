 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Sweet-Moments</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>
 


<body>
<?php
require_once "header.php";
?>

<div id="content">
<div id="leftPan">
<div id="categories">
<h2></h2>
<ul>
<li><a href="#"></a></li><a href="torturi.php" title="">Torturi</a>
<li><a href="#"></a></li><a href="prajituri.php" title="">Prajituri</a>
<li><a href="#"></a></li><a href="patiserie.php"title="">Produse de patiserie</a>
 
</ul>
</div>
</div>
<div id="middlePan">
 <object width="425" height="350" data="http://www.youtube.com/v/3PhLIBqTYBE" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/3PhLIBqTYBE" /></object>


<?php

	require_once"conn.php";
    $mysql_qry = "select * from img;";
    $result = mysqli_query($con, $mysql_qry);
	$flag_permission=true;
	$num_rows=0;
    if (mysqli_num_rows($result) > 0) {
		    while($row = $result->fetch_assoc()) {
				$data[] = $row;
                                $num_rows++;
			}
    } else {
        $flag_permission = false;
        echo "0 results";
    }
	
	
	
						if ($flag_permission){
                        for($i=0;$i<($num_rows);$i++){
                            echo '
							<div class="prod"> <div class="prodimg">
							<h2 style="align:center; width:425px; text-align:center;"> '.$data[$i]["title"].' </h2>
							<a href="produs.php?produsid='.$data[$i]["id"].'">
							<img src="'.$data[$i]["images"].'" style="max-width:425px;"
							</img>
							</a>
                               </div> </div>';
						}
						$num_rows=0;
    
 $con->close();
  

    }else{
       //echo 'permission denied !' / no results;
    }
               
            

?>
</div>
 
<div id="footer">
<img src="images/cards.jpg" alt="" height="20" width="141" />
<p><a href="#">HOME</a> | <a href="#">ABOUT
US</a> | <a href="#">SERVICES</a> | <a href="#">PRODUCTS</a> | <a href="#">SUPPORT
INFO</a> | <a href="#">NEWS &amp; EVENTS</a>
| <a href="#">CONTACTS</a><br />
Copyright © Your Company Name. Designed by <a href="http://www.templatesland.com">TemplatesLand.com</a></p>
<p><a href="http://www.templatesland.com">Supported by </a><a href="http://www.hosting24.com/" target="_blank">Hosting24.com</a></p>
</div>
 <!-- Share-->
 <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
	<!--LIKE-->
	<!-- <button class="button button-like">
  <i class="fa fa-heart"></i>
  <span>Like</span>
</button>-->
        
         <span class="likebtn-wrapper" data-identifier="item_1"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>

</body>
</html>