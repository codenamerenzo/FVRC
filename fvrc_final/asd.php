 <?php
											include('config.php');
												if (!isset($_FILES['date']['subject']['content'])) {
												echo "";
												$date=$_POST['date'];
												$subject=$_POST['subject'];
												$content=$_POST['content'];
			
												$save=mysql_query("INSERT INTO announcement_form (date, subject, content) VALUES ('$date','$subject','$content')");
												header("location: fvrc_president_login.php");
								
												}
												?>