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
            <?php //@require_once 'menu/uheader.php'; ?>
            <div id="header">



                <h1 id="logo-text"><a href="#">PES UNIVERSITY</a></h1>
                <p id="slogan">Faculty Management System</p>
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
<form id="formSubmit" name="form" method="post" action="process/uprocessLogin.php" >
                    <input type="hidden" name="type" value="login" />
                    <table class="tbl" width="500px">
<?php @require_once 'menu/logmenu.php'; ?>
                        <tr>
                            <td>UserName</td>
                            <td><input type="text" id="UserName" class="validate[required]" name="UserName" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="Password" class="validate[required]" name="Password" /></td>
                        </tr>
                        <tr>
                        
                            <td align="center" colspan="2"><input type="submit"  class="button" name="submit"   value="Login"/></td>

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