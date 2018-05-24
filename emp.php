<?php
require_once 'config/config.php'; 

require_once 'class/dbclass.php';
?>
<?php
include 'db.php';
$id =$_SESSION['Mg'];
$result = mysql_query("SELECT * FROM employee_detail WHERE EmpName  ='$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$EmpID=$test['EmpID'] ;
				$EmpName= $test['EmpName'] ;					
				$UserName=$test['UserName'] ;
				$Password=$test['Password'] ;
				$EmpAddress=$test['EmpAddress'] ;
				$EmpMobile=$test['EmpMobile'] ;
$EmpEmail=$test['EmpEmail'] ;
$EmpBirthdate=$test['EmpBirthdate'] ;
$EmpBloodGroup=$test['EmpBloodGroup'] ;
$EmpTechnology=$test['EmpTechnology'] ;
$Gender=$test['Gender'] ;
$image=$test['image'] ;


?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php require_once 'config/commonJS.php'; ?>
</head>

    <body>
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <?php @require_once 'menu/uheader.php'; ?>

            <!-- navigation -->	
            <?php @require_once 'menu/umenu.php'; ?>

            <!-- content-wrap starts here -->
          <div id="content-wrap">
                <div id="main">				
                    <div class="clear"></div>
            <div>
            <table width="294" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="displayGrid tbl" id="dataList" style="table-layout: fixed;">
                       
                            <tr>
                                <th  width="36%" align="center"><div align="left">ID</div></th>
								     <td width="64%" align="center"><div align="left"><?php echo $EmpID; ?> </div></td>
                            </tr>
									 <tr>
                                <th align="center"  ><div align="left">Name</div></th>
								 <td align="center"><div align="left"><?php echo $EmpName; ?></div></td></tr>

																 <tr>

				<th align="center" ><div align="left">Gender</div></th>
				<td align="center"><div align="left"><?php echo $Gender?></div></td></tr>
				<tr>
				
                                <th align="center"  ><div align="left">Email</div></th>
								<td align="center"><div align="left"><?php echo $EmpEmail; ?></div></td>
								</tr>
								<tr>
								
                                <th width="36%" align="center" ><div align="left">Mobile</div></th>
								 <td align="center"><div align="left"><?php echo $EmpMobile; ?></div></td>
			  </tr>
								 <tr>
                                <th width="36%" align="center" ><div align="left">Branch</div></th>
								<td align="center"><div align="left"><?php echo $EmpTechnology; ?></div></td>
								</tr>
								<tr>
                         
  <th   width="36%" align="center"><div align="left">Address </div></th>
     <td align="center"><div align="left"><?php echo $EmpAddress; ?></div></td></tr>
	 <tr>
  <th width="36%" align="center" ><div align="left">Birthdate </div></th>
  	<td align="center"><div align="left"><?php echo $EmpBirthdate; ?></div></td>
	</tr>
	<tr>
  <th align="center"  ><div align="left">BloodGroup </div></th>
  <td align="center"><div align="left"><?php echo $EmpBloodGroup?></div></td>
                            </tr>
              </table>
             </div>
                    
                <div class="clear">
				
				<p align="center"><font
					face="Arial,helvetica,verdana,geneva" size="5"><a href="#" title="Website Templates">HANDLING SUBJECTS</a>
<p align="center">
				
				
				</div>
                </div>
            <?php @require_once 'menu/sidemenu.php'; ?>	
            <!-- content-wrap ends here -->
            </div> 
            <!--footer starts here-->
            <?php @require_once 'menu/footer.php'; ?>
            <!-- wrap ends here -->
        </div>
    </body>
</html>
