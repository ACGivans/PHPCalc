<!--Andrew Givans-->

<!--This file that information is sent to from the form-->
<div>
<?php
//Variable declaration based on data entered by the user in the outside file
$eParticipation = $_POST['earnedParticipation'];
$mParticipation = $_POST['maxParticipation'];
$wParticipation = $_POST['weightParticipation'];
$eQuiz = $_POST['earnedQuiz'];
$mQuiz = $_POST['maxQuiz'];
$wQuiz = $_POST['weightQuiz'];
$eLab = $_POST['earnedLab'];
$mLab = $_POST['maxLab'];
$wLab = $_POST['weightLab'];
$ePracticum = $_POST['earnedPracticum'];
$mPracticum = $_POST['maxPracticum'];
$wPracticum = $_POST['weightPracticum'];

//Function that calculates the percentage of a grade
function calculatePercentage($value1, $value2){
	$gradePercentage = ($value1 / $value2) * 100;
	return $gradePercentage;
}

//Function that calculates the weight of a grade percentage
function calculateWeight($value3, $value4){
	$gradeWeight = ($value3 * $value4) / 100;
	return $gradeWeight;
}

//Final grade variable that is calculated by taking in variables that were entered in the external file as well as calculated in this file
$finalGrade = (calculateWeight(calculatePercentage($eParticipation, $mParticipation), $wParticipation) + calculateWeight(calculatePercentage($eQuiz, $mQuiz), $wQuiz) + calculateWeight(calculatePercentage($eLab, $mLab), $wLab) + calculateWeight(calculatePercentage($ePracticum, $mPracticum), $wPracticum));
//Outputs the variables with text explaining what they are
echo "You earned a " . calculatePercentage($eParticipation, $mParticipation) . "% for participation, with a weighted value of " . calculateWeight(calculatePercentage($eParticipation, $mParticipation), $wParticipation) . "%<br><br>";
echo "You earned a " . calculatePercentage($eQuiz, $mQuiz) . "% for Quizzes, with a weighted value of " . calculateWeight(calculatePercentage($eQuiz, $mQuiz), $wQuiz) . "%<br><br>";
echo "You earned a " . calculatePercentage($eLab, $mLab) . "% for the Lab Assignments, with a weighted value of " . calculateWeight(calculatePercentage($eLab, $mLab), $wLab) . "%<br><br>";
echo "You earned a " . calculatePercentage($ePracticum, $mPracticum) . "% for the Practicum, with a weighted value of " . calculateWeight(calculatePercentage($ePracticum, $mPracticum), $wPracticum) . "%<br><br>";
echo "Your final grade is a " . $finalGrade . "% which is a";
//this control structure determines what the letter representation of a numerical grade is and outputs it
($finalGrade >= 97) ? 
	$aaa = "n A+" : 
	$aaa = "";
	echo $aaa;
($finalGrade >= 93 && $finalGrade <= 96) ? 
	$aa = "n A" : 
	$aa = "";
	echo $aa;
($finalGrade >= 90 && $finalGrade <= 92) ? 
	$a = "n A-" : 
	$a = "";
	echo $a;
($finalGrade >= 87 && $finalGrade <= 89) ? 
	$bbb = " B+" : 
	$bbb = "";
	echo $bbb;
($finalGrade >= 83 && $finalGrade <= 86) ? 
	$bb = " B" : 
	$bb = "";
	echo $bb;
($finalGrade >= 80 && $finalGrade <= 82) ? 
	$b = " B-" : 
	$b = "";
	echo $b;
($finalGrade >= 77 && $finalGrade <= 79) ? 
	$ccc = " C+" : 
	$ccc = "";
	echo $ccc;
($finalGrade >= 73 && $finalGrade <= 76) ? 
	$cc = " C" : 
	$cc = "";
	echo $cc;
($finalGrade >= 70 && $finalGrade <= 72) ? 
	$c = " C-" : 
	$c = "";
	echo $c;
($finalGrade >= 60 && $finalGrade <= 69) ? 
	$d = " D" : 
	$d = "";
	echo $d;
($finalGrade >= 0 && $finalGrade <= 59) ? 
	$f = "n F" : 
	$f = "";
	echo $f;
?>
</div>



