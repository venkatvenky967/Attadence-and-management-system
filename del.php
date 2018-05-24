<?php
 include 'db.php';
$owner_id =$_REQUEST['EmpID'];
$result = mysql_query("SELECT * FROM salary_detail WHERE EmpID  ='$owner_id'");



$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$EmpID=$test['EmpID'] ;
				$SalaryID = $test['SalaryID'];
				

?>


<?php
 include 'db.php';
$owner_id =$_REQUEST['EmpID'];
$result1 = mysql_query("SELECT * FROM employee_detail WHERE EmpID  ='$owner_id'");
$test1 = mysql_fetch_array($result1);
if (!$result1) 
		{
		die("Error: Data not found..");
		}
				$EmpID=$test1['EmpID'] ;
		
				$EmpName=$test1['EmpName'] ;






?>

<?php require_once 'config/commonJS.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

        <?php require_once 'config/commonJS.php'; ?>
		    <style type="text/css">
<!--
.style1 {color: #000066}
.style2 {
	color: #660066;
	font-size: 24px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style3 {
	color: #0000FF;
	font-weight: bold;
}
-->
            </style>
</head>
			<body>
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <?php @require_once 'menu/aheader.php'; ?>

            <!-- navigation --><!-- content-wrap starts here -->
        <div id="content-wrap">
                <div id="main">				
				
<form action="delemp.php" method="post">
</br></br></br></br></br></br><h4 align="center" class="style1">Are you sure you want to delete this Employee "<?php echo $EmpName; ?>'s" record </h4>
</br></br></br>
<div align="center">
  <input type="hidden" name="EmpID" value="<?php echo $EmpID; ?>" />
  <input type="submit" class="button" name="ok" value="Delete">
  <a href="aindex.php"   class="style2 style3">CANCEL</a></div>
</form>
<div class="clear"></div>
                </div>
                <!-- content-wrap ends here -->	
</form>
</div>

            <!--footer starts here-->
            <?php @require_once 'menu/footer.php'; ?>

            <!-- wrap ends here -->
        </div>

    </body>
</html>
