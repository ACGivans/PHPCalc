<!--Andrew Givans-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html xmlns="http://w3.org/1999/xhtml">
<head>
<title>Andrew Givans Final Grade Calculator</title>
<link rel="stylesheet" href="calcStyle.css" type="text/css" />

<style>
.content{
	background-color: gainsboro;
	width: 800px;
	height: 500px ;
	float: left;
	clear: right;

}
h4 {
	
    color: black;
    text-align: center;
    background-color: gainsboro;
    font-family: arial;
    font-size: 20px;
}  
</style>
</head>
<body>

<div class="content">

<h4> Final Grade Calculator </h4>

<!--Displays from to input information that is sent to the finalGrade.php file-->
	<form action="finalgrade.php" method="post">
			<h3>Participation</h3>
			Earned: <input type="text" name="earnedParticipation" />
			Max: <input type="text" name="maxParticipation" />
			Weight (percentage): <input type="text" name="weightParticipation" />
			<h3>Quizzes</h3>
			Earned: <input type="text" name="earnedQuiz" />
			Max: <input type="text" name="maxQuiz" />
			Weight (percentage): <input type="text" name="weightQuiz" />
			<h3>Lab Assignments</h3>
			Earned: <input type="text" name="earnedLab" />
			Max: <input type="text" name="maxLab" />
			Weight (percentage): <input type="text" name="weightLab" />
			<h3>Exams</h3>
			Earned: <input type="text" name="earnedPracticum" />
			Max: <input type="text" name="maxPracticum" />
			Weight (percentage): <input type="text" name="weightPracticum" />
			<br /><br />
			<input type="submit" />
	</form>

</body>
</html>