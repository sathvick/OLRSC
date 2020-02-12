<?Php
session_start();
?>
<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>OLRSC</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>


<br><br><br><br><br>
<?Php
echo "
<div id='maindiv' class='maindiv'>
</br>
<img src='CIEL.png' alt='CIEL' style='width:315.04px;height:63.36px;'></br>
<h2>Online Learning Readiness Self-Check Survey</h2>";

echo "<h4>PURPOSE OF THE SURVEY</h4>For decades, researchers have studied factors that make college students successful at University. Typically, those assessments were administered retrospectively to enrolled students who had already attended classes. In order to provide you with real-time valuable feedback before your classes begin, we’ve designed this adapted self-assessment survey to measure your current abilities, proactively evaluate your readiness, and increase your chances of success. 


<h4>ABOUT SURVEY</h4>This survey will identify and test your level of proficiency or competence in the Five (5) areas that significantly contribute to your online academic success. After you have completed the survey, we will provide you with an overall score, a breakdown of your results, and any necessary resources you may need to be successful at Texas Tech.  Recommendations will be based on proven research unique to your strengths and areas of improvements.

Remember to keep a copy of your results and recommendations for your records and to retake the survey next year.

This survey will only take 10 minutes and your responses are anonymous. 

<h4>WHO CAN TAKE THE SURVEY</h4>Everyone can take the survey. You have the choice to take this survey. You may choose to stop taking the survey at any time with no penalty. You do not need to provide a reason if you are unable to take the survey. We do not expect that you will face any negative consequences from taking this survey.

<h4>CONTACT</h4>
If you have any questions please contact us<br><br>

Center for Innovation in E-Learning (CIEL)<br>
Texas Tech University<br>
College of Education<br>
3002 18th Street Lubbock<br>
TX 79409<br>
<br>
Phone: (806) 742-2377<br><br>
Email: ciel.educ@ttu.edu<br><br>
By clicking the 'I Agree' button below, you are agreeing to take the survey.";

echo "<form action='survey.php'>
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
   <button type='submit' style='font-size:10pt;color:white;background-color:DarkRed;border-radius: 4px;border:1px solid DarkRed; align='center'; float: right; padding:3px'>I Agree >></button>
</form>";
echo "</div>";
?>
</body>
</html>
