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
<form action="delemp.php" method="post">
</br></br></br></br></br></br><h4>Are you sure you want to delete this Employee "<?php echo $EmpName; ?>'s" record </h4></br></br></br>
<input type="hidden" name="EmpID" value="<?php echo $EmpID; ?>" />
<input type="submit" class="button" name="ok" value="Delete">

</form>