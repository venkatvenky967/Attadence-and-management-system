
<?php
require_once 'config/config.php';

require_once 'class/dbclass.php';
require_once 'class/EmpRegister.php';

$emp = new EmpRegister();
$EmpID = $_REQUEST['EmpID'];
if($EmpID != NULL){
    $result = $emp->get($EmpID);
    if($result == NULL){
        $EmpID = '';
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php require_once 'config/commonJS.php'; ?>
        <script>
             $(document).ready(function(){
                   $( "#EmpBirthdate" ).datepicker({
                        dateFormat: 'yy-mm-dd',
                        showOn: "button",
			buttonImage: "images/calendar.gif",
			buttonImageOnly: true,
                        changeMonth: true,
                        changeYear: true,
                        yearRange: "-30"
                   });
              });
        </script>
        <script>
            window.onload = menuSelect('menuEmployee');
        </script>






    </head>

    <body>
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <?php @require_once 'menu/aheader.php'; ?>

            <!-- navigation -->	
            <?php @require_once 'menu/logmenu.php'; ?>

            <!-- content-wrap starts here -->
            <div id="content-wrap">
                <div id="main">				
                    <?php echo $_SESSION['Msg']; ?>
                    

<form id="formSubmit" name="frmreg" method="POST" action="process/uprocessEmpRegister.php" >
            <input type="hidden" name="type" value="<?php echo $EmpID == '' ? 'Add' : 'Update'; ?>"/>
            <input type="hidden" name="EmpID" value="<?php echo $EmpID; ?>"/>
            
<div >
            <table class="tbl">
                <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">First Name</font></b></td>
                    <td><input type="text" class="validate[required]" name="EmpName" id="EmpName" value="<?php echo $result[0]['EmpName'];?>"/></td>
                </tr>
				 <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Last Name</font></b></td>
                    <td><input type="text" class="validate[required]" name="LEmpName" id="LEmpName" value="<?php echo $result[0]['LEmpName'];?>"/></td>
                </tr>



<tr>
<td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">User Name</font></b></td>
                    <td><input type="text" name="UserName" id="UserName" value="<?php echo $result[0]['UserName'];?>"/></td>
                </tr>
<tr>


<td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Password</font></b></td>
                    <td><input type="password"  class="validate[required]"  name="Password" id="Password" value=""/></td>
</tr>



                </tr>

<tr>
				<td width="38%" align="left"><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Gender:</font></b></td>



 <td><select name="Gender" id="Gender">
                            <option value="Male"  >Male</option>
                            <option value="Female"  >Female</option>
                            
                        </select>
                    </td>













			</tr>
			 <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">State</font></b></td>
                    <td>
                        <select name="EmpState" id="EmpState">

                            <option value="Karnataka" <?php echo $result[0]['EmpState'] == 'Karnataka' ? 'selected' : ''; ?> >Karnataka</option>
                            <option value="Andhra Pradesh" <?php echo $result[0]['EmpState'] == 'Andhra Pradesh' ? 'selected' : ''; ?> >Andhra Pradesh</option>
                            <option value="TamilNadu" <?php echo $result[0]['EmpState'] == 'TamilNadu' ? 'selected' : ''; ?> >TamilNadu</option>
<option value="Kerala" <?php echo $result[0]['EmpState'] == 'Kerala' ? 'selected' : ''; ?> >Kerala</option>
<option value="Maharastra" <?php echo $result[0]['EmpState'] == 'Maharastra' ? 'selected' : ''; ?> >Maharastra</option>
<option value="Orissa" <?php echo $result[0]['EmpState'] == 'Orissa' ? 'selected' : ''; ?> >Orissa</option>
<option value="Gujrat" <?php echo $result[0]['EmpState'] == 'Gujrat' ? 'selected' : ''; ?> >Gujrat</option>
<option value="Madhya Pradesh" <?php echo $result[0]['EmpState'] == 'Madhya Pradesh' ? 'selected' : ''; ?> >Madhya Pradesh</option>
<option value="West Bengal" <?php echo $result[0]['EmpState'] == 'West Bengal' ? 'selected' : ''; ?> >West Bengal</option>
<option value="Punjab" <?php echo $result[0]['EmpState'] == 'Punjab' ? 'selected' : ''; ?> >Punjab</option>
<option value="Haryana" <?php echo $result[0]['EmpState'] == 'Haryana' ? 'selected' : ''; ?> >Haryana</option>
<option value="Uttar Pradesh" <?php echo $result[0]['EmpState'] == 'Uttar Pradesh' ? 'selected' : ''; ?> >Uttar Pradesh</option>
<option value="Uttaranchal" <?php echo $result[0]['EmpState'] == 'Uttaranchal' ? 'selected' : ''; ?> >Uttaranchal</option>
<option value="Nagaland" <?php echo $result[0]['EmpState'] == 'Nagaland' ? 'selected' : ''; ?> >Nagaland</option>
<option value="Mizoram" <?php echo $result[0]['EmpState'] == 'Mizoram' ? 'selected' : ''; ?>> Mizoram</option>
<option value="Jammu & Kashmir " <?php echo $result[0]['EmpState'] == 'Jammu & Kashmir ' ? 'selected' : ''; ?> >Jammu & Kashmir </option>
<option value="Meghalaya" <?php echo $result[0]['EmpState'] == 'Meghalaya' ? 'selected' : ''; ?> >Meghalaya</option>
<option value="Arunachal Pradesh" <?php echo $result[0]['EmpState'] == 'Arunachal Pradesh' ? 'selected' : ''; ?> >Arunachal Pradesh</option>
<option value="Assam" <?php echo $result[0]['EmpState'] == 'Assam' ? 'selected' : ''; ?> >Assam</option>
<option value="Bihar" <?php echo $result[0]['EmpState'] == 'Bihar' ? 'selected' : ''; ?> >Bihar</option>
<option value="Chattisgarh" <?php echo $result[0]['EmpState'] == 'Chattisgarh' ? 'selected' : ''; ?> >Chattisgarh</option>
<option value="Delhi" <?php echo $result[0]['EmpState'] == 'Delhi' ? 'selected' : ''; ?> >Delhi</option>
<option value="Goa" <?php echo $result[0]['EmpState'] == 'Goa' ? 'selected' : ''; ?> >Goa</option>
<option value="Himachal Pradesh" <?php echo $result[0]['EmpState'] == 'Himachal Pradesh' ? 'selected' : ''; ?> >Himachal Pradesh</option>
<option value="Jarkhand" <?php echo $result[0]['EmpState'] == 'Jarkhand' ? 'selected' : ''; ?> >Jarkhand</option>
<option value="Manipur" <?php echo $result[0]['EmpState'] == 'Manipur' ? 'selected' : ''; ?> >Manipur</option>
<option value="Rajasthan" <?php echo $result[0]['EmpState'] == '>Rajasthan' ? 'selected' : ''; ?> >Rajasthan</option>
<option value="Sikkim" <?php echo $result[0]['EmpState'] == 'Sikkim' ? 'selected' : ''; ?> >Sikkim</option>
<option value="Tripura" <?php echo $result[0]['EmpState'] == 'Tripura' ? 'selected' : ''; ?> >Tripura</option>

                        </select>
                    </td>
                </tr>
				 

               

 <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Full Address</font></b></td>
                    <td><textarea rows="5" cols="30" class="validate[required]" name="EmpAddress" id="EmpAddress" ><?php echo $result[0]['EmpAddress'];?></textarea></td>
                </tr>
                				

<tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Mobile Number</font></b></td>
                    <td><input class="validate[required,minSize[10],maxSize[10],custom[integer]]" type="text" class="validate[required]" name="EmpMobile" id="EmpMobile" value="<?php echo $result[0]['EmpMobile'];?>"/></td>
                </tr>
               
 <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Email</font></b></td>
                    <td><input type="text" class="validate[required,custom[email]]" name="EmpEmail" id="EmpEmail" value="<?php echo $result[0]['EmpEmail'];?>"/></td>
                </tr>
                

<tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Birth Date</font></b></td>
                    <td><input type="text" class="validate[required]" readonly name="EmpBirthdate" id="EmpBirthdate" value="<?php echo $result[0]['EmpBirthdate'];?>"/></td>
                </tr>
               


 <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Blood Group</font></b></td>
                    <td><select name="EmpBloodGroup" id="EmpBloodGroup">
                            <option value="A+" <?php echo $result[0]['EmpBloodGroup'] == 'A+' ? 'selected' : ''; ?> >A+</option>
                            <option value="A-" <?php echo $result[0]['EmpBloodGroup'] == 'A-' ? 'selected' : ''; ?> >A-</option>
                            <option value="B+" <?php echo $result[0]['EmpBloodGroup'] == 'B+' ? 'selected' : ''; ?> >B+</option>
                            <option value="B-" <?php echo $result[0]['EmpBloodGroup'] == 'B-' ? 'selected' : ''; ?> >B-</option>
                            <option value="AB+" <?php echo $result[0]['EmpBloodGroup'] == 'AB+' ? 'selected' : ''; ?> >AB+</option>
                            <option value="AB-" <?php echo $result[0]['EmpBloodGroup'] == 'AB-' ? 'selected' : ''; ?> >AB-</option>
                            <option value="O+" <?php echo $result[0]['EmpBloodGroup'] == 'O+' ? 'selected' : ''; ?> >O+</option>
                            <option value="O-" <?php echo $result[0]['EmpBloodGroup'] == 'O-' ? 'selected' : ''; ?> >O-</option>
                        </select>
                    </td>
                </tr>
               
 <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">BRANCH</font></b></td>
                    <td>
                        <select name="EmpTechnology" id="EmpTechnology">
<option value="STAFF" <?php echo $result[0]['EmpTechnology'] == 'STAFF' ? 'selected' : ''; ?> >STAFF</option>
                            <option value="CS" <?php echo $result[0]['EmpTechnology'] == 'CS' ? 'selected' : ''; ?> >CS</option>
                            <option value="EC" <?php echo $result[0]['EmpTechnology'] == 'EC' ? 'selected' : ''; ?> >EC</option>
                            <option value="ME" <?php echo $result[0]['EmpTechnology'] == 'ME' ? 'selected' : ''; ?> >ME</option>
<option value="EE" <?php echo $result[0]['EmpTechnology'] == 'EE' ? 'selected' : ''; ?> >EE</option>
<option value="AT" <?php echo $result[0]['EmpTechnology'] == 'AT' ? 'selected' : ''; ?> >AT</option>
<option value="CE" <?php echo $result[0]['EmpTechnology'] == 'CE' ? 'selected' : ''; ?> >CE</option>
<option value="CP" <?php echo $result[0]['EmpTechnology'] == 'CP' ? 'selected' : ''; ?> >CP</option>

                        </select>
                    </td>
                </tr>
				 <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Bank Account Number</font></b></td>
                    <td><input type="text" class="validate[required]" name="AccNo" id="AccNo" value="<?php echo $result[0]['AccNo'];?>"/></td>
                </tr>
				 <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Bank Name</font></b></td>
                    <td><input type="text" class="validate[required]" name="Bname" id="Bname" value="<?php echo $result[0]['BName'];?>"/></td>
                </tr>
				 <tr>
                    <td><b> <font
					face="Arial,helvetica,verdana,geneva" size="2">Bank Branch Name</font></b></td>
                    <td><input type="text" class="validate[required]" name="Bbname" id="Bbname" value="<?php echo $result[0]['BbName'];?>"/></td>
                </tr>
       



                    <td></td>
                    <td><input type="submit" name="Submit"  value="REGISTER"  /></td>
                </tr>
            </table>
</div>
            
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

