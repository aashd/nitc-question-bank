<?php 
		if (isset($_SESSION['pass'])) {
		
				$newURL='./add_course_form.php?i=';
				$con = mysqli_connect('localhost', 'b120850cs', '******', 'db_b120850cs')or die('Error connecting to MySQL server.');
				$C_ID=mysqli_real_escape_string($con,$_POST['C_ID']);
				$C_name=mysqli_real_escape_string($con,$_POST['C_name']);
				$DP_ID=mysqli_real_escape_string($con,$_POST['DP_ID']);
				$Semester=mysqli_real_escape_string($con,$_POST['Semester']);
				$Descr=mysqli_real_escape_string($con,$_POST['Descr']);
				$query="INSERT INTO course VALUES ('$C_ID','$C_name','$DP_ID','$Descr','$Semester')";
				$result = mysqli_query($con, $query) ;
					if (!$result) {
						echo "ERROR: ".mysqli_error($con);
						header('Location: '.$newURL.'1');
						mysqli_close($con);
					}
				header('Location: '.$newURL.'1');
				 mysqli_close($con);

		}
		else{
			header('Location: '.$newURL.'1');
		}
				
?>
