<?php
	session_start();
	$_SESSION['date_registration'];
	$_SESSION['fvrc_id_registration'];
	$_SESSION['username_registration'];
	$_SESSION['password_registration'];
	
	$_SESSION['cellphone_no_registration']=$_POST['cellphone_no_registration'];
	$_SESSION['telephone_no_registration']=$_POST['telephone_no_registration'];
	$_SESSION['email_registration']=$_POST['email_registration'];
	$_SESSION['present_address_registration']=$_POST['present_address_registration'];
	$_SESSION['permananet_address_registration']=$_POST['permananet_address_registration'];
	$_SESSION['homephone_no_registration']=$_POST['homephone_no_registration'];
	$_SESSION['years_of_stay_registration']=$_POST['years_of_stay_registration'];
	$_SESSION['dialects_spoken_registration']=$_POST['dialects_spoken_registration'];
	$_SESSION['special_skills_registration']=$_POST['special_skills_registration'];
	$_SESSION['trainings_registration']=$_POST['trainings_registration'];
	$_SESSION['item_name_registration']=$_POST['item_name_registration'];
	
	include('conn.php');
	

//INSERTING DATA IN TABLE VOLUNTEER_INFO
$sql="INSERT INTO `volunteer_information`(`id_no`,`firstname`,`lastname`,`middlename`,`maidenname`,`gender`,`status`,`cellphone_no`,`date_of_birth`,`place_of_birth`,`citizenship`,`club_name`,`civic_call_sign`,`fvrc_call_sign`,`date_registered`,`religion`,`blood_type`,`health_issues`,`medications`)
VALUES ('$_SESSION[fvrc_id_registration]','$_SESSION[firstname_registration]','$_SESSION[lastname_registration]','$_SESSION[middlename_registration]','$_SESSION[maidenname_registration]','$_SESSION[gender_registration]','$_SESSION[marital_status_registration]','$_SESSION[cellphone_no_registration]','$_SESSION[date_of_birth_registration]','$_SESSION[place_of_birth_registration]','$_SESSION[citizenship_registration]','$_SESSION[club_name_registration]','$_SESSION[civic_call_sign_registration]','$_SESSION[fvrc_call_sign_registration]','$_SESSION[date_registration]','$_SESSION[religion_registration]','$_SESSION[blood_type_registration]','$_SESSION[health_issues_registration]','$_SESSION[medications_registration]')";

//Combining the lastname,firstname and middle name

//INSERTING DATA IN TABLE VOLUNTEER_CONTACT
$sql2="INSERT INTO `volunteer_contact`(`id_no`,`cellphone_no`,`telephone_no`,`e-mail`,`present_address`,`permanent_address`,`homephone_no`,`year_of_stay`) 
VALUES ('$_SESSION[fvrc_id_registration]','$_SESSION[cellphone_no_registration]','$_SESSION[telephone_no_registration]','$_SESSION[email_registration]','$_SESSION[present_address_registration]','$_SESSION[permananet_address_registration]','$_SESSION[homephone_no_registration]','$_SESSION[years_of_stay_registration]')";

//INSERTING DATA IN TABLE VOLUNTEER_SKILLS
$sql3="INSERT INTO `volunteer_skills`(`id_no`,`dialects_spoken`, `special_skills`, `trainings`) 
VALUES ('$_SESSION[fvrc_id_registration]','$_SESSION[dialects_spoken_registration]','$_SESSION[special_skills_registration]','$_SESSION[trainings_registration]')";

//INSERTING DATA IN TABLE VOLUNTEER_RESOURCES
$sql4="INSERT INTO `volunteer_resources`(`id_no`,`item_name`) VALUES ('$_SESSION[fvrc_id_registration]','$_SESSION[item_name_registration]')";

//INSERTING DATA IN TABLE ACCOUNTS
$status="pending";
$position="member";
$club_name="none";
$sql5="INSERT INTO `accounts`(`id_no`, `username`, `password`,`account_status`,`position`,`club_name`) VALUES ('$_SESSION[fvrc_id_registration]','$_SESSION[username_registration]','$_SESSION[password_registration]','$status','$position','$club_name')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }

if (!mysql_query($sql2))
  {
  die('Error: ' . mysql_error());
  }
  
  if (!mysql_query($sql3))
  {
  die('Error: ' . mysql_error());
  }
   if (!mysql_query($sql4))
  {
  die('Error: ' . mysql_error());
  }
     if (!mysql_query($sql5))
  {
  die('Error: ' . mysql_error());
  }
  ?>
 <html>
<script type="text/javascript">
window.alert("Successful Register")
</script>
<?php
 header('Location:login.html');
?>
</html> 