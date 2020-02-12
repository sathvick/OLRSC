<?Php
session_start();
?>
<!Doctype html>
<html>
<head>
<title>OLRSC</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript"  src='http://cdn.renderedfont.com/js/renderedfont-0.8.min.js#free'></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<style>
		.container-fluid{
			margin-left: 0px;
			position: relative;
		}
		input.radio {
		left:20%;

		}

		th {
			 border-bottom: 1px solid;
		}
tr, td {
	height: 40px;
overflow: hidden;
padding-left: 5px;
}
* {
  box-sizing: border-box;
}
tr:nth-child(even){
	background-color:#dddddd
}


@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }

  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}

	</style>
<body>
<script>
   $(document).ready(function() {

$("input:submit").click(function()
{

var form = document.getElementById("test");

var qs1 = form.elements["q1"].value;
var qs2 = form.elements["q2"].value;
var qs3 = form.elements["q3"].value;
var qs4 = form.elements["q4"].value;
var qs5 = form.elements["q5"].value;
var qs6 = form.elements["q6"].value;
var qs7 = form.elements["q7"].value;
var qs8 = form.elements["q8"].value;
var qs9 = form.elements["q9"].value;
var qs10 = form.elements["q10"].value;
var qs11 = form.elements["q11"].value;
var qs12 = form.elements["q12"].value;
var qs13 = form.elements["q13"].value;
var qs14 = form.elements["q14"].value;
var qs15 = form.elements["q15"].value;
var qs16 = form.elements["q16"].value;
var qs17 = form.elements["q17"].value;
var qs18 = form.elements["q18"].value;
var qs19 = form.elements["q19"].value;
var qs20 = form.elements["q20"].value;
var qs21 = form.elements["q21"].value;
var qs22 = form.elements["q22"].value;
var qs23 = form.elements["q23"].value;
var qs24 = form.elements["q24"].value;
var qs25 = form.elements["q25"].value;
var qs26 = form.elements["q26"].value;
var qs27 = form.elements["q27"].value;
var qs28 = form.elements["q28"].value;
var qs29 = form.elements["q29"].value;
var qs30 = form.elements["q30"].value;
var qs31 = form.elements["q31"].value;
var qs32 = form.elements["q32"].value;
var qs33 = form.elements["q33"].value;
var qs34 = form.elements["q34"].value;
var qs35 = form.elements["q35"].value;
var qs36 = form.elements["q36"].value;
var qs37 = form.elements["q37"].value;
var qs38 = form.elements["q38"].value;
var qs39 = form.elements["q39"].value;
var qs40 = form.elements["q40"].value;
var qs41 = form.elements["q41"].value;
var qs42 = form.elements["q42"].value;
var qs43 = form.elements["q43"].value;


var temp1, temp2, temp3, temp4, temp5, temp6, temp7, temp8, temp9, temp10;

temp1 = +qs1 + +qs2 + +qs3 + +qs4;
temp2 = +qs5 + +qs6 + +qs7 + +qs8;
temp3 = +qs9 + +qs10 + +qs11 + +qs12;
temp4 = +qs13 + +qs14 + +qs15 + +qs16 + +qs17;
temp5 = +qs18 + +qs19 + +qs20 + +qs21;
temp6 = +qs22 + +qs23 + +qs24 + +qs25;
temp7 = +qs26 + +qs27 + +qs28 + +qs29 + +qs30;
temp8 = +qs31 + +qs32 + +qs33 + +qs34 + +qs35;
temp9 = +qs36 + +qs37 + +qs38 + +qs39;
temp10 = +qs40 + +qs41 + +qs42 + +qs43;


	var result1, result2, result3, result4, result5, result6, result7, result8, result9, result10;

	result1 = (temp1 /20) * 5;
	result2 = (temp2 /20) * 5;
	result3 = (temp3 /20) * 5;
	result4 = (temp4 /25) * 5;
	result5 = (temp5 /20) * 5;
	result6 = (temp6 /20) * 5;
	result7 = (temp7 /25) * 5;
	result8 = (temp8 /25) * 5;
	result9 = (temp9 /20) * 5;
	result10 = (temp10 /20) * 5;




var overall_temp = +result1 + +result2 + +result3 + +result4 + +result5 + +result6 + +result7 + +result8 + +result9 + +result10;
var overall = (overall_temp/1000) * 100;


localStorage.setItem("storeResult1",result1);
localStorage.setItem("storeResult2",result2);
localStorage.setItem("storeResult3",result3);
localStorage.setItem("storeResult4",result4);
localStorage.setItem("storeResult5",result5);
localStorage.setItem("storeResult6",result6);
localStorage.setItem("storeResult7",result7);
localStorage.setItem("storeResult8",result8);
localStorage.setItem("storeResult9",result9);
localStorage.setItem("storeResult10",result10);

localStorage.setItem("storeOverall",overall);

  });


});

</script>

<?Php

echo "
<div id='maindiv' class='maindiv'>
<div class='container-fluid bg-grey row'></br>
  <div class='row'>
    <div class='col-sm-6'>
    <img src='COE logo.png' alt='CIEL' class='responsive' style='width:318px;height:71px;' align='left'>
    </div>
    <div class='col-sm-6'>
      <img src='CIEL logo.png' alt='CIEL' class='responsive' style='width:320px;height:70px;' align='right'>
    </div>
  </div>
</div></br>
<h2>Online Learning Readiness Self-Check Survey</h2>";


?>


<form id="test">
<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
  <h3>Self-efficacy for completing an online course</h3>
  <tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs1'>I am confident that I can complete an online course with a good grade.</td>
    <td><input type='radio' class='radio' name='q1' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q1' value='2' id='opt4' />
    <td>
	<input type='radio' class='radio' name='q1' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q1' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q1' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs2'>I am confident that I can understand complex concepts presented in an online course.
</td>

        <td><input type='radio' class='radio' name='q2' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q2' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q2' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q2' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q2' value='5' id='opt1' />
     </td>


  </tr>
  <tr>
    <td id='qs3'>I am confident that I can successfully complete all of required assignments in an online course.
</td>

        <td><input type='radio' class='radio' name='q3' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q3' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q3' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q3' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q3' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs4'>I am confident that I can face challenges that may arise to meet the course expectations.</td>
        <td><input type='radio' class='radio' name='q4' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q4' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q4' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q4' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q4' value='5' id='opt1' />
     </td>
  </tr>

</table>
<br>
<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
  <h3>Learning Management</h3>

		<b>Goal Setting: refers to students’ strategy to manage and achieve their goals by breaking a long-term goal (e.g., completing an extensive and complex task) into small sub-goals so that they can be easily achieved. </b>

	<tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs5'>Before starting an assignment, I plan out my work.</td>
        <td><input type='radio' class='radio' name='q5' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q5' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q5' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q5' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q5' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs6'>I break down the course workload into smaller segments so that I can handle it more easily.
</td>
        <td><input type='radio' class='radio' name='q6' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q6' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q6' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q6' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q6' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs7'>I approach my work step-by-step in order to successfully proceed through the course.
</td>
        <td><input type='radio' class='radio' name='q7' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q7' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q7' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q7' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q7' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs8'>I set my goals to effectively learn in an online course.</td>
        <td><input type='radio' class='radio' name='q8' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q8' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q8' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q8' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q8' value='5' id='opt1' />
     </td>
  </tr>

</table>
<br>

<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
  <b>Monitoring: refers to Students’ strategy to monitor their learning status in an online course to make sure they are on the right track. </b>
  <tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs9'>I regularly check an online course to keep up to date.</td>
        <td><input type='radio' class='radio' name='q9' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q9' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q9' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q9' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q9' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs10'>I regularly check course guidelines to be successful in an online course.
</td>
        <td><input type='radio' class='radio' name='q10' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q10' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q10' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q10' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q10' value='5' id='opt1' />
     </td>

  </tr>
  <tr>
    <td id='qs11'>I regularly check my own progress to make sure that I stay on the right track in an online course.
</td>

        <td><input type='radio' class='radio' name='q11' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q11' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q11' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q11' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q11' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs12'>I regularly log into online course to monitor course activities (e.g., discussion) so I contribute to the online course</td>
        <td><input type='radio' class='radio' name='q12' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q12' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q12' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q12' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q12' value='5' id='opt1' />
     </td>
  </tr>

</table>
<br>
<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">

  <h3>Resource Management</h3>
  <b>Time Management: refers to Students’ strategy to manage and use their time effectively for success in online learning by predicting necessary time allotment for course task in relation to their entire schedule. </b>
  <tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs13'>I plan my time in advance to complete assignments for online learning.</td>
        <td><input type='radio' class='radio' name='q13' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q13' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q13' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q13' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q13' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs14'>I set up my own due dates for online assignments to avoid procrastination.
</td>

        <td><input type='radio' class='radio' name='q14' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q14' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q14' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q14' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q14' value='5' id='opt1' />
     </td>


  </tr>
  <tr>
    <td id='qs15'>Completing an assignment is always one of the top priorities in my schedule.
</td>

        <td><input type='radio' class='radio' name='q15' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q15' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q15' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q15' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q15' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs16'>I assign enough study time for online learning.</td>
        <td><input type='radio' class='radio' name='q16' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q16' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q16' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q16' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q16' value='5' id='opt1' />
     </td>
  </tr>

    <tr>
    <td id='qs17'>I mark online assignments with due dates, so I do not miss anything.</td>
        <td><input type='radio' class='radio' name='q17' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q17' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q17' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q17' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q17' value='5' id='opt1' />
     </td>
  </tr>

</table>
<br>
<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">


	<b>Space management: refers to Students’ strategy to manage their space effectively for success in online learning by finding a comfortable and non-distractive place in which they can focus on their tasks. </b>
  <tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs18'>I choose a location where there will be fewer distraction to study</td>
        <td><input type='radio' class='radio' name='q18' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q18' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q18' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q18' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q18' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs19'>I find a comfortable place to study for online learning.
</td>

        <td><input type='radio' class='radio' name='q19' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q19' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q19' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q19' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q19' value='5' id='opt1' />
     </td>


  </tr>
  <tr>
    <td id='qs20'>I know where I can do assignments most efficiently.
</td>

        <td><input type='radio' class='radio' name='q20' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q20' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q20' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q20' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q20' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs21'>
I find a space where I can fully focus for learning.</td>
        <td><input type='radio' class='radio' name='q21' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q21' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q21' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q21' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q21' value='5' id='opt1' />
     </td>
  </tr>


</table>
<br>
<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">


	<b>Technology management: refers to Students’ level of proficiency in using technology relevant to online courses (e.g., using functions in Blackboard or installing software to learn). </b>
  <tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs22'>I can skillfully use a Learning Management System (e.g., Blackboard) to take an online course.</td>
        <td><input type='radio' class='radio' name='q22' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q22' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q22' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q22' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q22' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs23'>I do not have a problem with using MS Office products or Google tools for my online learning.
</td>

        <td><input type='radio' class='radio' name='q23' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q23' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q23' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q23' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q23' value='5' id='opt1' />
     </td>


  </tr>
  <tr>
    <td id='qs24'>I am not afraid of using new software or tools for activities and assignments (e.g., collaboration or video conference) in an online course.
</td>

        <td><input type='radio' class='radio' name='q24' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q24' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q24' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q24' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q24' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs25'>
I can fix the issue when I encounter technical problems</td>
        <td><input type='radio' class='radio' name='q25' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q25' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q25' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q25' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q25' value='5' id='opt1' />
     </td>
  </tr>


</table>
<br>
<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
  <h3>Interaction Management</h3>

	  <b>Interaction with the instructor: refers to Students’ strategy to interact with the instructor of their online courses by initiating questions and discussions, as well as maintaining open communication with the instructor. </b>
  <tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs26'>I ask the instructor questions when needed.</td>
        <td><input type='radio' class='radio' name='q26' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q26' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q26' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q26' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q26' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs27'>I seek assistance from the instructor when needed.
</td>

        <td><input type='radio' class='radio' name='q27' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q27' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q27' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q27' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q27' value='5' id='opt1' />
     </td>


  </tr>
  <tr>
    <td id='qs28'>I ask the instructor to clarify information when it is not clear to me.
</td>

        <td><input type='radio' class='radio' name='q28' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q28' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q28' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q28' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q28' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs29'>
I timely inform the instructor when unexpected situations arise.</td>
        <td><input type='radio' class='radio' name='q29' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q29' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q29' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q29' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q29' value='5' id='opt1' />
     </td>
  </tr>

    <tr>
    <td id='qs30'>
I initiate discussions with the instructor when needed.</td>
        <td><input type='radio' class='radio' name='q30' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q30' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q30' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q30' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q30' value='5' id='opt1' />
     </td>
  </tr>


</table>

<br>
<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">


	<b>Interaction with the peers: refers to Students’ strategy to interact with the peers not only for learning but also for contributing to the online learning community by questioning and providing opinions to help each other. </b>
  <tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs31'>I effectively communicate with classmates.</td>
        <td><input type='radio' class='radio' name='q31' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q31' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q31' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q31' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q31' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs32'>I respond to other students in a timely manner.
</td>

        <td><input type='radio' class='radio' name='q32' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q32' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q32' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q32' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q32' value='5' id='opt1' />
     </td>


  </tr>
  <tr>
    <td id='qs33'>I seek assistance from other students if I need it.
</td>

        <td><input type='radio' class='radio' name='q33' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q33' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q33' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q33' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q33' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs34'>
I attempt  to help others online when given the opportunity.</td>
        <td><input type='radio' class='radio' name='q34' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q34' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q34' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q34' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q34' value='5' id='opt1' />
     </td>
  </tr>

    <tr>
    <td id='qs35'>
I express my opinions to other students when needed.</td>
        <td><input type='radio' class='radio' name='q35' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q35' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q35' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q35' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q35' value='5' id='opt1' />
     </td>
  </tr>


</table>

<br>
<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
  <h3>Motivational Management</h3>

	  <b>Effort regulation: refers to Students’ strategy to manage their effort and attention in the face of distractions and uninteresting tasks by being persistence in accomplishing learning tasks. </b>
  <tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs36'>I work hard to do well in an online course even if I don’t like what we are doing.</td>
        <td><input type='radio' class='radio' name='q36' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q36' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q36' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q36' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q36' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs37'>Even when course materials are dull and uninteresting, I still manage to keep working until I finish in an online course.
</td>

        <td><input type='radio' class='radio' name='q37' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q37' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q37' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q37' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q37' value='5' id='opt1' />
     </td>


  </tr>
  <tr>
    <td id='qs38'>I do not give up quickly even if my learning progress is slow in an online course.
</td>

        <td><input type='radio' class='radio' name='q38' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q38' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q38' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q38' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q38' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs39'>
I do my best to achieve what is expected of me in an online course.</td>
        <td><input type='radio' class='radio' name='q39' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q39' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q39' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q39' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q39' value='5' id='opt1' />
     </td>
  </tr>


</table>
<br>
<table>
<col width="50%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">
<col width="10%">


	<b>Mastery self-talk: refers to Students’ strategy to enhance their competence through self-talking and reinforcing to master the content. </b>
  <tr>
    <th></th>
    <th>Strongly Disagree</th>
    <th>Disagree</th>
        <th>Neutral</th>
    <th>Agree</th>
    <th>Strongly Agree</th>
  </tr>

  <tr>
    <td id='qs40'>I push myself to work intensely for the sake of learning.</td>
        <td><input type='radio' class='radio' name='q40' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q40' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q40' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q40' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q40' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
        <td id='qs41'>I persuade myself to keep learning in order to find out how much I can possibly learn.
</td>

        <td><input type='radio' class='radio' name='q41' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q41' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q41' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q41' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q41' value='5' id='opt1' />
     </td>


  </tr>
  <tr>
    <td id='qs42'>I challenge myself to finish the task so that I can learn a lot.
</td>

        <td><input type='radio' class='radio' name='q42' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q42' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q42' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q42' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q42' value='5' id='opt1' />
     </td>
  </tr>
  <tr>
    <td id='qs43'>
I tell myself that I should keep learning in order to personally increase my knowledge.</td>
        <td><input type='radio' class='radio' name='q43' value='1' id='opt5' />
    </td>
	<td><input type='radio' class='radio' name='q43' value='2' id='opt4' />
    </td>
	<td><input type='radio' class='radio' name='q43' value='3' id='opt3' />
  </td>
	<td><input type='radio' class='radio' name='q43' value='4' id='opt2' />
   </td>
    <td><input type='radio' class='radio' name='q43' value='5' id='opt1' />
     </td>
  </tr>


</table>
</form>
<br>
<center>
<form action='resultcopy3.php' align='center'>
    <input type='submit' style='font-family: Bebas Neue, Arial;font-size:26px;color:white;background-color:black;border-radius: 4px;border:1px solid white; align: center; padding:5px;' value='   Submit   '/>
</form>
</body>
</html>
