<?Php
session_start();
?>
<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>Survey online script plus2net demo scripts using JQuery</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>


<script>
   $(document).ready(function() {
 
$("input:submit").click(function() {

$.post( "surveyck.php", {"opt":$('input[name="options1"]:checked').val(),"qst_id":document.getElementById("qs_id1").value},function(return_data,status){

},"json");

$.post( "surveyck.php", {"opt":$('input[name="options2"]:checked').val(),"qst_id":document.getElementById("qs_id2").value},function(return_data,status){

},"json");

$.post( "surveyck.php", {"opt":$('input[name="options3"]:checked').val(),"qst_id":document.getElementById("qs_id3").value},function(return_data,status){

},"json");

$.post( "surveyck.php", {"opt":$('input[name="options4"]:checked').val(),"qst_id":document.getElementById("qs_id4").value},function(return_data,status){

},"json");

$.post( "surveyck.php", {"opt":$('input[name="options5"]:checked').val(),"qst_id":document.getElementById("qs_id5").value},function(return_data,status){

},"json");

$.post( "surveyck.php", {"opt":$('input[name="options6"]:checked').val(),"qst_id":document.getElementById("qs_id6").value},function(return_data,status){

},"json");

$.post( "surveyck.php", {"opt":$('input[name="options7"]:checked').val(),"qst_id":document.getElementById("qs_id7").value},function(return_data,status){

},"json");


$('#maindiv').html("Thank you for taking the survey");



     });


   });

</script>
<br><br><br><br><br>
<?Php
require "config.php";
echo "
<div id='maindiv' class='maindiv'>
</br>
<img src='CIEL.png' alt='CIEL' style='width:315.04px;height:63.36px;'></br>
<h2>Online Learning Readiness Self-Check Survey</h2></br>";

$c1=$dbo->prepare("select * from poll_qst where qst_id=1");
if($c1->execute()){
$r1 = $c1->fetch(PDO::FETCH_OBJ);
}
echo "
<form id='f1'>
<table>
<tr><td>
<h3 id='q1'>$r1->qst</h3></td></tr>
<tr><td>
<input type=hidden id=qs_id1 value=$r1->qst_id>
<tr><td>
      <input type='radio' name='options1' id='opt1' value='option1' > <label for='opt1' class='lb'>$r1->opt1</label>
</td></tr>
<tr><td>
      <input type='radio' name='options1' id='opt2' value='option2' >  <label for='opt2' class='lb'>$r1->opt2</label>
</td></tr>

<tr><td>
      <input type='radio' name='options1' id='opt3' value='option3' >  <label for='opt3' class='lb'>$r1->opt3</label>
</td></tr>
<tr><td>
      <input type='radio' name='options1' id='opt4' value='option4' >  <label for='opt4' class='lb'>$r1->opt4</label>
</td></tr>
<tr><td>
      <input type='radio' name='options1' id='opt5' value='option5' >  <label for='opt5' class='lb'>$r1->opt5</label>
</td></tr>
</table>

</form>";

$c2=$dbo->prepare("select * from poll_qst where qst_id=2");
if($c2->execute()){
$r2 = $c2->fetch(PDO::FETCH_OBJ);
}
echo "
<form id='f2'>
<table>
<tr><td>
<h3 id='q2'>$r2->qst</h3></td></tr>
<tr><td>
<input type=hidden id=qs_id2 value=$r2->qst_id>
<tr><td>
      <input type='radio' name='options2' id='opt1' value='option1' > <label for='opt1' class='lb'>$r2->opt1</label>
</td></tr>
<tr><td>
      <input type='radio' name='options2' id='opt2' value='option2' >  <label for='opt2' class='lb'>$r2->opt2</label>
</td></tr>

<tr><td>
      <input type='radio' name='options2' id='opt3' value='option3' >  <label for='opt3' class='lb'>$r2->opt3</label>
</td></tr>
<tr><td>
      <input type='radio' name='options2' id='opt4' value='option4' >  <label for='opt4' class='lb'>$r2->opt4</label>
</td></tr>
<tr><td>
      <input type='radio' name='options2' id='opt5' value='option5' >  <label for='opt5' class='lb'>$r1->opt5</label>
</td></tr>
</table>

</form>";

$c3=$dbo->prepare("select * from poll_qst where qst_id=3");
if($c3->execute()){
$r3 = $c3->fetch(PDO::FETCH_OBJ);
}
echo "
<form id='f3'>
<table>
<tr><td>
<h3 id='q3'>$r3->qst</h3></td></tr>
<tr><td>
<input type=hidden id=qs_id3 value=$r3->qst_id>
<tr><td>
      <input type='radio' name='options3' id='opt1' value='option1' > <label for='opt1' class='lb'>$r3->opt1</label>
</td></tr>
<tr><td>
      <input type='radio' name='options3' id='opt2' value='option2' >  <label for='opt2' class='lb'>$r3->opt2</label>
</td></tr>

<tr><td>
      <input type='radio' name='options3' id='opt3' value='option3' >  <label for='opt3' class='lb'>$r3->opt3</label>
</td></tr>
<tr><td>
      <input type='radio' name='options3' id='opt4' value='option4' >  <label for='opt4' class='lb'>$r3->opt4</label>
</td></tr>
<tr><td>
      <input type='radio' name='options3' id='opt5' value='option5' >  <label for='opt5' class='lb'>$r1->opt5</label>
</td></tr>
</table>

</form>";

$c4=$dbo->prepare("select * from poll_qst where qst_id=4");
if($c4->execute()){
$r4 = $c4->fetch(PDO::FETCH_OBJ);
}
echo "
<form id='f4'>
<table>
<tr><td>
<h3 id='q4'>$r4->qst</h3></td></tr>
<tr><td>
<input type=hidden id=qs_id4 value=$r4->qst_id>
<tr><td>
      <input type='radio' name='options4' id='opt1' value='option1' > <label for='opt1' class='lb'>$r4->opt1</label>
</td></tr>
<tr><td>
      <input type='radio' name='options4' id='opt2' value='option2' >  <label for='opt2' class='lb'>$r4->opt2</label>
</td></tr>

<tr><td>
      <input type='radio' name='options4' id='opt3' value='option3' >  <label for='opt3' class='lb'>$r4->opt3</label>
</td></tr>
<tr><td>
      <input type='radio' name='options4' id='opt4' value='option4' >  <label for='opt4' class='lb'>$r4->opt4</label>
</td></tr>
<tr><td>
      <input type='radio' name='options4' id='opt5' value='option5' >  <label for='opt5' class='lb'>$r1->opt5</label>
</td></tr>
</table>

</form>";

$c5=$dbo->prepare("select * from poll_qst where qst_id=5");
if($c5->execute()){
$r5 = $c5->fetch(PDO::FETCH_OBJ);
}
echo "
<form id='f5'>
<table>
<tr><td>
<h3 id='q5'>$r5->qst</h3></td></tr>
<tr><td>
<input type=hidden id=qs_id5 value=$r5->qst_id>
<tr><td>
      <input type='radio' name='options5' id='opt1' value='option1' > <label for='opt1' class='lb'>$r5->opt1</label>
</td></tr>
<tr><td>
      <input type='radio' name='options5' id='opt2' value='option2' >  <label for='opt2' class='lb'>$r5->opt2</label>
</td></tr>

<tr><td>
      <input type='radio' name='options5' id='opt3' value='option3' >  <label for='opt3' class='lb'>$r5->opt3</label>
</td></tr>
<tr><td>
      <input type='radio' name='options5' id='opt4' value='option4' >  <label for='opt4' class='lb'>$r5->opt4</label>
</td></tr>
<tr><td>
      <input type='radio' name='options5' id='opt5' value='option5' >  <label for='opt5' class='lb'>$r1->opt5</label>
</td></tr>
</table>

</form>";

$c6=$dbo->prepare("select * from poll_qst where qst_id=6");
if($c6->execute()){
$r6 = $c6->fetch(PDO::FETCH_OBJ);
}
echo "
<form id='f6'>
<table>
<tr><td>
<h3 id='q6'>$r6->qst</h3></td></tr>
<tr><td>
<input type=hidden id=qs_id6 value=$r6->qst_id>
<tr><td>
      <input type='radio' name='options6' id='opt1' value='option1' > <label for='opt1' class='lb'>$r6->opt1</label>
</td></tr>
<tr><td>
      <input type='radio' name='options6' id='opt2' value='option2' >  <label for='opt2' class='lb'>$r6->opt2</label>
</td></tr>

<tr><td>
      <input type='radio' name='options6' id='opt3' value='option3' >  <label for='opt3' class='lb'>$r6->opt3</label>
</td></tr>
<tr><td>
      <input type='radio' name='options6' id='opt4' value='option4' >  <label for='opt4' class='lb'>$r6->opt4</label>
</td></tr>
<tr><td>
      <input type='radio' name='options6' id='opt5' value='option5' >  <label for='opt5' class='lb'>$r1->opt5</label>
</td></tr>
</table>

</form>";



$c7=$dbo->prepare("select * from poll_qst where qst_id=7");
if($c7->execute()){
$r7 = $c7->fetch(PDO::FETCH_OBJ);
}
echo "
<form id='f7'>
<table>
<tr><td>
<h3 id='q7'>$r7->qst</h3></td></tr>
<tr><td>
<input type=hidden id=qs_id7 value=$r7->qst_id>
<tr><td>
      <input type='radio' name='options7' id='opt1' value='option1' > <label for='opt1' class='lb'>$r7->opt1</label>
</td></tr>
<tr><td>
      <input type='radio' name='options7' id='opt2' value='option2' >  <label for='opt2' class='lb'>$r7->opt2</label>
</td></tr>

<tr><td>
      <input type='radio' name='options7' id='opt3' value='option3' >  <label for='opt3' class='lb'>$r7->opt3</label>
</td></tr>
<tr><td>
      <input type='radio' name='options7' id='opt4' value='option4' >  <label for='opt4' class='lb'>$r7->opt4</label>
</td></tr>
<tr><td>
      <input type='radio' name='options7' id='opt5' value='option5' >  <label for='opt5' class='lb'>$r1->opt5</label>
</td></tr>
</table>

</form>";



echo "<form>
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
<input type='submit' value='Submit' style='font-size:10pt;color:white;background-color:DarkRed;border-radius: 4px;border:1px solid DarkRed; align='center'; padding:3px'>
&nbsp; &nbsp;
<input type='submit' value='Cancel' onClick='javascript:history.go(-1)' style='font-size:10pt;color:white;background-color:DarkRed;border-radius: 4px;border:1px solid DarkRed; align='center'; padding:3px'>
</form>";
echo "</div>";
?>
</body>
</html>
