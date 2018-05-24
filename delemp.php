<?php
require_once 'config/config.php';
require_once 'class/dbclass.php';
$db = new MySQLCN();
	$EmpID = $_POST['EmpID'];
	mysql_query("DELETE from employee_detail WHERE EmpID='$EmpID'");
			

		 echo "<script>windows: location='EmployeeList.php'</script>";				
			