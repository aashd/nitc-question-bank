<?php 
		session_start();
		if (isset($_SESSION['pass'])) {
				$con = mysqli_connect('localhost', 'b120850cs', '*******', 'db_b120850cs')or die('Error connecting to MySQL server.');
				$C_ID=mysqli_real_escape_string($con,$_POST['C_ID']);
				$DP_ID=mysqli_real_escape_string($con,$_POST['DP_ID']);
				$Acc_year=mysqli_real_escape_string($con,$_POST['Acc_year']);
				$MorW=mysqli_real_escape_string($con,$_POST['Monsoon/Winter']);
				$exam_type=mysqli_real_escape_string($con,$_POST['Test_type']);
				$Descr=mysqli_real_escape_string($con,$_POST['Descr']);
				$QP_ID= $DP_ID.'_'.$C_ID.'_'.$Acc_year.'_'.$MorW.'_'.$exam_type;
				$uploaddir = '/var/www/html/uploads/';
				$uploadfile = $uploaddir . $QP_ID.'.pdf';
				$newURL='./upload_ques_paper.php?i=';
				echo $uploadfile;
				//echo $_POST['ques_paper'];
				if ($_FILES['ques_paper']['name']=="") {
					header('Location: '.$newURL.'1');
					mysqli_close($con);
					exit();
				}
				$query="INSERT INTO question_paper (
						`Q_ID` ,
						`C_ID` ,
						`DP_ID` ,
						`Acc_year` ,
						`MorW` ,
						`Q_paperpath` ,
						`exam_type` ,
						`A_paperpath` ,
						`Sem`
					)  VALUES ('$QP_ID','$C_ID','$DP_ID','$Acc_year','$MorW','$QP_ID','$exam_type',NULL,NULL)";
				$result = mysqli_query($con, $query) ;
				if (!$result) {
					echo "ERROR: ".mysqli_error($con);
					header('Location: '.$newURL.'1');
					mysqli_close($con);
					exit();
					
				}
				else{
				if (move_uploaded_file($_FILES['ques_paper']['tmp_name'], $uploadfile)) {
				    echo "File is valid, and was successfully uploaded.\n";
					
				}
				else{
				echo '<pre>';
					echo 'Error uploading the file';
					echo 'Here is some more debugging info:';
					print_r($_FILES);
					error_reporting(E_ALL);
					error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
				print "</pre>";	
				}
				header('Location: '.$newURL.'2');			
				}
		}
		else{
			header('Location: ./admin.php');
		}

				
				 mysqli_close($con);
				
?>
