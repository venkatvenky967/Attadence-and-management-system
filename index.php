<?php 
@require_once 'config/config.php';

@require_once 'class/dbclass.php';



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php require_once 'config/commonJS.php'; ?>
        

      
        

        


        <script>
            window.onload = menuSelect('menuHome');
        </script>
    </head>
    <body  >
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <?php @require_once 'menu/aheader.php'; ?>

            <!-- navigation -->	
            

            <!-- content-wrap starts here -->
    <div id="content-wrap">
    <div id="content-wrap">
	<center>
	<br><br><br><br><br>
	
                <table   width="1100"  height=" 300" border="30" cellpadding="10" cellspacing="0" bordercolor="green">
				<tr>
				<th bgcolor="#800000"><a href="ulogin.php"><img src="emp.jpg"></a></th>
				<th bgcolor="#8B4513"><a href="login.php"><img src="admin.jpg"></a></th>
				<th bgcolor="#800000"><a href="adduser.php"><img src="reg.jpg"></a></th>
				</tr>
				
	</font>			
				</table>

  
    <br><br><br><br><br><br><br><br><br><br><br><br>           
           
            <!-- content-wrap ends here -->
            </div>
            <!--footer starts here-->
            <?php @require_once 'menu/ifooter.php'; ?>
            <!-- wrap ends here -->
        </div>



    </body>
</html>
