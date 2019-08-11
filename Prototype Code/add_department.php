<?php 
		if (isset($_SESSION['pass'])) {
				$newURL='./add_department_form.php?i=';
				$con = mysqli_connect('localhost', 'b120850cs', '*****', 'db_b120850cs')or die('Error connecting to MySQL server.');
				$DP_ID=mysqli_real_escape_string($con,$_POST['DP_ID']);
				$DP_name=mysqli_real_escape_string($con,$_POST['DP_name']);
				$Descr=mysqli_real_escape_string($con,$_POST['Descr']);
				$query="INSERT INTO department VALUES ('$DP_ID','$DP_name','$Descr')";
				$result = mysqli_query($con, $query) ;
					if (!$result) {
						echo "ERROR: ".mysqli_error($con);
						header('Location: '.$newURL.'1');
						mysqli_close($con);
					}
				header('Location: '.$newURL.'2');
				 mysqli_close($con);
		}
		else{
			header('Location: '.$newURL.'1');
		}
				
?>
