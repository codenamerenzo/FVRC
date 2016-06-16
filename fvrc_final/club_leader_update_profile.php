<?php
	include('conn.php');
	session_start();
	
	
	$sql="
	UPDATE 
	`accounts` 
SET 
	
	`username` = '$_POST[edit_username]', 
	`password` = '$_POST[edit_password]'
	
WHERE 
	`id_no`='$_SESSION[SESS_MEMBER_ID]'
	";
	
//VOLUNTEER INFORMATION SQL UPDATE
	$sql2="
			UPDATE 
	`volunteer_information` 
SET 
	`firstname` = '$_POST[edit_firstname]', 
	`lastname` = '$_POST[edit_lastname]', 
	`middlename` = '$_POST[edit_middlename]', 
	 
	`gender` = '$_POST[edit_gender]', 
	`status` = '$_POST[edit_marital_status]',
	`cellphone_no`= '$_POST[edit_cellphone_no]',
	`date_of_birth` = '$_POST[edit_birthday]', 
	`place_of_birth` = '$_POST[edit_place_of_birth]', 
	`citizenship` = '$_POST[edit_citizenship]', 
	`club_name` = '$_POST[edit_club_name]', 
	`civic_call_sign` = '$_POST[edit_civic_call_sign]', 
	`fvrc_call_sign` = '$_POST[edit_fvrc_call_sign]', 
	`religion` = '$_POST[edit_religion]', 
	`blood_type` = '$_POST[edit_blood_type]', 
	`health_issues` = '$_POST[edit_health_issues]', 
	`medications` = '$_POST[edit_medication]' 
WHERE 
	`id_no`='$_SESSION[SESS_MEMBER_ID]'
	";
//END OF VOLUNTEER INFORMATION SQL UPDATE 

//VOLUNTEER CONTACT
	$sql3="
		UPDATE 
	`volunteer_contact` 
SET 
	`cellphone_no` = '$_POST[edit_cellphone_no]', 
	`telephone_no` = '$_POST[edit_telephone_no]', 
	`e-mail` = '$_POST[edit_email_address]', 
	`present_address` = '$_POST[edit_present_address]', 
	`permanent_address` = '$_POST[edit_permanent_address]', 
	`homephone_no` = '$_POST[edit_homephone_no]', 
	`year_of_stay` = '$_POST[edit_year_of_stay]' 
WHERE 
	`id_no`='$_SESSION[SESS_MEMBER_ID]'
	";
//END OF VOLUNTEER CONTACT

//VOLUNTEER SKILLS
	$sql4="
	UPDATE 
	`volunteer_skills` 
SET 
	 
	`dialects_spoken` = '$_POST[edit_dialects_spoken]', 
	`special_skills` = '$_POST[edit_special_skills]', 
	`trainings` = '$_POST[edit_trainings]' 
WHERE 
	`id_no`='$_SESSION[SESS_MEMBER_ID]'
	";
//END OF VOLUNTEER SKILLS

//VOLUNTEER RESOURCES
	$sql5="
	UPDATE 
	`volunteer_resources` 
SET 
	 
	`item_name` = '$_POST[edit_item_name]' 
WHERE 
	`id_no`='$_SESSION[SESS_MEMBER_ID]'
	";
//END OF VOLUNTEER RESOURCES


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
  header('location: club_leader_profile.php');
?>
