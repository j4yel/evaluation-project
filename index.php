<?php
	require('config/config.php');
	require('config/db.php');
	
if(isset($_POST['submit']))
	{
		
		$instructor = mysqli_real_escape_string($conn, $_POST['instructor']);
		$course= mysqli_real_escape_string($conn, $_POST['course']);
		$schedule = mysqli_real_escape_string($conn, $_POST['schedule']);
		$i1 = mysqli_real_escape_string($conn, $_POST['i1']);
		$i2 = mysqli_real_escape_string($conn, $_POST['i2']);
		$i3 = mysqli_real_escape_string($conn, $_POST['i3']);
		$i4 = mysqli_real_escape_string($conn, $_POST['i4']);
		$i5 = mysqli_real_escape_string($conn, $_POST['i5']);
		$i6 = mysqli_real_escape_string($conn, $_POST['i6']);
		$t1 = mysqli_real_escape_string($conn, $_POST['t1']);
		$t2 = mysqli_real_escape_string($conn, $_POST['t2']);
		$t3 = mysqli_real_escape_string($conn, $_POST['t3']);
		$t4 = mysqli_real_escape_string($conn, $_POST['t4']);
		$t5 = mysqli_real_escape_string($conn, $_POST['t5']);
		$t6 = mysqli_real_escape_string($conn, $_POST['t6']);
		$comments = mysqli_real_escape_string($conn, $_POST['comments']);
		$suggestions = mysqli_real_escape_string($conn, $_POST['suggestions']);
	

	$query = "INSERT INTO form(instructor, course, schedule, i1, i2, i3, i4, i5, i6, t1, t2, t3, t4, t5, t6, comments, suggestions) VALUES ('$instructor', '$course', '$schedule', '$i1', '$i2', '$i3', '$i4', '$i5', '$i6', '$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$comments', '$suggestions')";

	if(mysqli_query($conn, $query))
	{
		header('Location:'.ROOT_URL.'');
	}
	else{ echo 'ERROR:' .msqli_error($conn);}

}

	
?>



<!DOCTYPE html>
<html>
<head>
	<title>Evaluation</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<div id="topbar">
		<h1>Excel Technical Skills and Career Center Inc.</h1>
		<h2>Course Evaluation</h2>
		<img id="excel" src="logo/excel.jpg">
		<img id="tesda" src="logo/tesda.jpg">
	</div>


	<div  class="container" >
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div id="input1">

	 			<label class="label1">Instructor:</label>
	 			
				<input type="name" name="instructor" class="form-control" required="">
			
			<div class="rightsideinput">
	 			<label class="label" >Course:</label>
				<input type="name" name="course" class="form-control" required="">
				</div>

			</div>
			<div id="input2">
	 			<label class="label1">Date:</label>
				<input type="date" name="date" class="form-control" required="">
			<div class="rightsideinput">
	 			<label class="labels">Schedule:</label>
				<input type="name" name="schedule" class="form-control" required="">
			</div>
			</div>
			<div>
			<h4>Please let us know how we can serve you better. Kindly check your answer for each of the given questions.</h4>
			<h4>Instructor</h4>
			<h4 id="yesno">YES</h4>
			<h4 id="yesnoo">NO</h4>
			<p>1. Does s/he start his class on time?
				<input type="radio" name="i1" value="no" class="radioyes" required="">
				<input type="radio" name="i1" value="yes" class="radioyes" required="">
			</p>
			<p>2.Does s/he carry himself well? Is s/he well groomed and properly attired?
				<input type="radio" name="i2" value="no" class="radioyes" required="">
				<input type="radio" name="i2" value="yes" class="radioyes" required="">
			</p>
			<p>3. Does s/he have clear and audible voice?
				<input type="radio" name="i3" value="no" class="radioyes" required="">
				<input type="radio" name="i3" value="yes" class="radioyes" required="">
			</p>
			<p>4. Does s/he attend class regularly?
				<input type="radio" name="i4" value="no" class="radioyes" required="">
				<input type="radio" name="i4" value="yes" class="radioyes" required="">
			</p>
			<p>5. Does s/he move arround to assist each student during activities / laboratory?
				<input type="radio" name="i5" value="no" class="radioyes" required="">
				<input type="radio" name="i5" value="yes" class="radioyes" required="">
			</p>
			<p>6. Does s/he accommodate participant's questions patiently?
				<input type="radio" name="i6" value="no" class="radioyes" required="">
				<input type="radio" name="i6" value="yes" class="radioyes" required="">
			</p>
			<br>
			<h4>Training</h4>
			<p>1. Are the materials and equipment available before s/he starts the class?
				<input type="radio" name="t1" value="no" class="radioyes" required="">
				<input type="radio" name="t1" value="yes" class="radioyes" required="">
			</p>
			<p>2. Are the printed learning materials clear, up-to-date, and well organized?
				<input type="radio" name="t2" value="no" class="radioyes" required="">
				<input type="radio" name="t2" value="yes" class="radioyes" required="">
			</p>
			<p>3. Do you feel adequetely prepared to complete the exercises base on the lecture?
				<input type="radio" name="t3" value="no" class="radioyes" required="">
				<input type="radio" name="t3" value="yes" class="radioyes" required="">
			</p>
			<p>4. Do you have enough time to complete each activity without feeling rushed?
				<input type="radio" name="t4" value="no" class="radioyes" required="">
				<input type="radio" name="t4" value="yes" class="radioyes" required="">
			</p>
			<p>5. Do you exercises help you to illustrate the lecture topics?
				<input type="radio" name="t5" value="no" class="radioyes" required="">
				<input type="radio" name="t5" value="yes" class="radioyes" required="">
			</p>
			<p>6. Are you satisfied with the training?
				<input type="radio" name="t6" value="no" class="radioyes" required="">
				<input type="radio" name="t6" value="yes" class="radioyes" required="">
			</p>
			<br>
			</div>
			<h4>Additional comments on the lab exercised:</h4>
			<div >
			
			<textarea class="trya" name="comments" required=""></textarea>
			</div>
			<h4>Other suggestions:</h4>
			<div >
			
			<textarea class="trya"  name="suggestions" required=""></textarea>
			</div>

			<input type="submit" name="submit" class="btn">


		</form>
	</div>





</body>
</html>