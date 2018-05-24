<?php 
@require_once 'config/config.php';
?>
<html>
    <head>
        <?php @require_once 'config/commonJS.php'; ?>		
    </head>
    <body>
        <!-- wrap starts here -->
        <div id="wrap">
            <!--header -->
            <?php //@require_once 'menu/header.php'; ?>
            <div id="header">
                <h1 id="logo-text"><a href="#">PES UNIVERSITY</a></h1>
                <p id="slogan">Faculty SALARY Management System</p>
                <div id="header-links">
                </div>
            </div>
           
 <!-- navigation -->	
            <?php //@require_once 'menu/menu.php'; ?>
           
 <!-- content-wrap starts here -->
           
 <div id="content-wrap">
                <div id="main">
                	<?php echo $_SESSION['Msg']; ?>
                    


<?php @require_once 'menu/logmenu.php'; ?>
<form action="process/processLogin.php" method="post" name="formSubmit" id="formSubmit">
                    <input type="hidden" name="type" value="login" />
                    <table width="700px" bordercolor="#F0F0F0" class="tbl">
                        <tr>
                            <td><div align="center">User Name</div></td>
                            <td><input type="text" id="UserName" class="validate[required]" name="UserName" /></td>
                        </tr>
                        <tr>
                            <td><div align="center">Password</div></td>
                            <td><input type="password" id="Password" class="validate[required]" name="Password" /></td>
                        </tr>
                        <tr>
                            <td><div align="center"></div></td>
                            <td><input type="submit" value="Login" name="submit" /></td>
                        </tr>
                    </table>
                  </form>    
                    <div class="clear"></div>
                </div>

            <!-- content-wrap ends here -->
            </div>
            <!--footer starts here-->
            <?php @require_once 'menu/footer.php'; ?>
            <!-- wrap ends here -->
        </div>
    </body>
</html>