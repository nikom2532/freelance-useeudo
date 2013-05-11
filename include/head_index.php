<?php
	include("{$rootpath}include/head_index_headTag.php");
?>
	<div align="center">
        <div id="content"><br>
        	<div id="logo">
            </div>
				<div style="padding-left:200px; padding-top:20px;">
					<div style="float:left;"><a href="index.php"><img src="pic/thumb/menuA1.png" alt=""/></a></div>
					<div style="float:left;"><a href="recept.php"><img src="pic/thumb/menuA2.png" alt=""/></a></div>
					<div style="float:left;"><a href="product.php"><img src="pic/thumb/menuA3.png" alt=""/></a></div>
					<div style="float:left;"><a href="show.php"><img src="pic/thumb/menuA4.png" alt=""/></a></div>
					<div style="float:left;"><a href="Register.php"><img src="pic/thumb/menuA5.png" alt=""/></a></div>
					<div style="float:left;"><a href="contactUs.php"><img src="pic/thumb/menuA6.png" alt=""/></a></div>
					<div style="clear:both"></div>
				</div>
            </div>
            <div id="in_content">
<?php 
            	
	            if($page =="product"){
?>
					<div id="box_leftColumn" style="float:left;">
		            	<?php include("{$rootpath}include/leftContent_index_product.php"); ?>
		            </div>
<?php		            	
	            }
	            elseif($page != "recept"){ ?>
		            <div id="box_leftColumn" style="float:left;">
		            	<?php include("{$rootpath}include/leftContent_index.php"); ?>
		            </div>
<?php
	            }
	            
	            
	             ?>
	            
            	<div id="box_content" <?php 
	            	if($page=="recept") { echo "style=\"width:100%; background-color:#ffffff; \"  "; }
            	
            	
            	?> > <!--1.2-->
