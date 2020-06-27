<?Php
session_start();

if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
  /* 
     Up to you which header to send, some prefer 404 even if 
     the files does exist for security
  */
  header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

  /* choose the appropriate page to redirect users */
  die( header( 'location: /olrscted' ) );

}

date_default_timezone_set("America/Chicago");
$_SESSION["start"] = date("Y-m-d H:i:s");
$_SESSION["email"] = $_POST["email"];
$_SESSION["site"] = $_POST["site"];

?>

<!DOCTYPE html>
<html>
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLRSC-TED</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"  src='http://cdn.renderedfont.com/js/renderedfont-0.8.min.js#free'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
    html, body { height: 100%; width: 100%; margin: 0; }
    #test fieldset:not(:first-of-type) {
    display: none;
    }
    #test fieldset {
    /*stacking fieldsets above each other*/
    position: relative;
    }
    #test .action-button {
    cursor: pointer;
    }
    /*progressbar*/
    #progressbar {
    /*margin-bottom: 50px;*/
    margin-top: 2.5%;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
    }
    /* text in the list */
    #progressbar li {
    list-style-type: none;
    color: black;
    text-transform: uppercase;
    font-size: 9px;
    width: 20%;
    float: left;
    position: relative;
    }
    /* text in the list */
    #progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 50px;
    line-height: 50px;
    display: block;
    font-size: 25px;
    color: #333;
    background: #dddddd;
    border-radius: 50%;
    margin: 0 auto 5px auto;
    }
    /*progressbar connectors*/
    #progressbar li:after {
    content: '';
    width: 73%;  /* Changed */
    height: 2px;
    background: black;
    position: absolute;
    left: -37%;  /* Changed */
    top: 25px;
    z-index: 1;  /* Changed */
    }
    #progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
    }
    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,  #progressbar li.active:after{
    background: #548235;
    color: white;
    }
    .prog {
    padding-left: 10%;
    }

    input[type="radio"] {
    /* remove standard background appearance */
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    /* create custom radiobutton appearance */
    cursor: pointer;
    left: 10%;
    width: 25px;
    height: 25px;
    padding: 6px;
    border: 1px solid black;
    /* background-color only for content */
    background-color: white;
    border-radius: 50%;
    }
    input[type="radio"]:checked {
    background-color: #27AE60;
    }
    th {
    border-bottom: 1px solid;
    }
    tr, td {
    height: 75px;
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
    h1 {
    text-align: center;
    }
    /* Hide all steps by default: */
    .tab {
    display: none;
    }
    @media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 60%;}
    .col-2 {width: 8%;}
    .col-3 {width: 8%;}
    .col-4 {width: 8%;}
    .col-5 {width: 8%;}
    .col-6 {width: 8%;}
}

@media only screen and (max-width: 500px) {
    /* For mobile: */
    .col-1 {width: 70%;}
    .col-2 {width: 20%;}
    .col-3 {width: 4%;}
    .col-4 {width: 2%;}
    .col-5 {width: 2%;}
    .col-6 {width: 2%;}
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

      result1 = (temp1 /40) * 10;
      result2 = (temp2 /40) * 10;
      result3 = (temp3 /40) * 10;
      result4 = (temp4 /50) * 10;
      result5 = (temp5 /40) * 10;
      result6 = (temp6 /40) * 10;
      result7 = (temp7 /50) * 10;
      result8 = (temp8 /50) * 10;
      result9 = (temp9 /40) * 10;
      result10 = (temp10 /40) * 10;




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
    <div id='maindiv' class='maindiv'>
  
      </br>
      <div class='row'>
        <div class='col-sm-6'>
          <img src='img/COE logo.png' alt='CIEL' class='responsive' style='width:318px;height:71px;' align='left'>
        </div>
        <div class='col-sm-6'>
          <img src='img/CIEL logo.png' alt='CIEL' class='responsive' style='width:320px;height:70px;' align='right'>
        </div>
      </div>
      </br>
      <h2>Online Learning Readiness Self-Check Survey</h2>
      <form id="test" action="resultcopy3.php" method="post">
        <!-- progressbar -->
        <div class="prog">
          <center>
            <ul  id="progressbar">
              <b>
                <li class="active" id="active1"></li>
                <li id="active2"></li>
                <li id="active3"></li>
                <li id="active4"></li>
            </ul>
          </center>
          </b>
        </div>
        <br>
        <p><b>Suppose you are taking an online course. To what extent do you agree (strongly disagree to strongly agree) to the following statements that accurately describe your learning? Please answer accurately and honestly. 
        <br><br>
        Please answer accurately and honestly</b></p>
        <!-- One "tab" for each step in the form: -->
        <fieldset  id="field_1">
        <table>
            <col class="col-1">
            <col class="col-2">
            <col class="col-3">
            <col class="col-4">
            <col class="col-5">
            <col class="col-6">
            <!-- <h3>Self-efficacy for completing an online course</h3> -->
            <tr>
              <th></th>
              <th align="center">Strongly Disagree</th>
              <th align="center">Disagree</th>
              <th align="center">Neutral</th>
              <th align="center">Agree</th>
              <th align="center">Strongly &nbsp;&nbsp;&nbsp;Agree</th>
            </tr>
            <tr>
              <td id='qs1' style="padding:20px; font-size:21px; font-weight: bold;">I am confident that I can complete an online course with a good grade.</td>
              <td><input type='radio' class='radio' name='q1' value='2' id='opt5' required/>
              </td>
              <td><input type='radio' class='radio' name='q1' value='4' id='opt4' />
              <td>
                <input type='radio' class='radio' name='q1' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q1' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q1' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs2' style="padding:20px; font-size:21px; font-weight: bold;">I am confident that I can understand complex concepts presented in an online course.
              </td>
              <td><input type='radio' class='radio' name='q2' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q2' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q2' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q2' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q2' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs3' style="padding:20px; font-size:21px; font-weight: bold;">I am confident that I can successfully complete all of required assignments in an online course.
              </td>
              <td><input type='radio' class='radio' name='q3' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q3' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q3' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q3' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q3' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs4' style="padding:20px; font-size:21px; font-weight: bold;">I am confident that I can face challenges that may arise to meet the course expectations.</td>
              <td><input type='radio' class='radio' name='q4' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q4' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q4' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q4' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q4' value='10' id='opt1' />
              </td>
            </tr>
            
            <tr>
              <td id='qs5' style="padding:20px; font-size:21px; font-weight: bold;">Before starting an assignment, I plan out my work.</td>
              <td><input type='radio' class='radio' name='q5' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q5' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q5' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q5' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q5' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs6' style="padding:20px; font-size:21px; font-weight: bold;">I break down the course workload into smaller segments so that I can handle it more easily.
              </td>
              <td><input type='radio' class='radio' name='q6' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q6' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q6' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q6' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q6' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs7' style="padding:20px; font-size:21px; font-weight: bold;">I approach my work step-by-step in order to successfully proceed through the course.
              </td>
              <td><input type='radio' class='radio' name='q7' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q7' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q7' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q7' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q7' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs8' style="padding:20px; font-size:21px; font-weight: bold;">I set my goals to effectively learn in an online course.</td>
              <td><input type='radio' class='radio' name='q8' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q8' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q8' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q8' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q8' value='10' id='opt1' />
              </td>
            </tr>
            
            <tr>
              <td id='qs9' style="padding:20px; font-size:21px; font-weight: bold;">I regularly check an online course to keep up to date.</td>
              <td><input type='radio' class='radio' name='q9' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q9' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q9' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q9' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q9' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs10' style="padding:20px; font-size:21px; font-weight: bold;">I regularly check course guidelines to be successful in an online course.
              </td>
              <td><input type='radio' class='radio' name='q10' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q10' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q10' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q10' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q10' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs11' style="padding:20px; font-size:21px; font-weight: bold;">I regularly check my own progress to make sure that I stay on the right track in an online course.
              </td>
              <td><input type='radio' class='radio' name='q11' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q11' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q11' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q11' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q11' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs12' style="padding:20px; font-size:21px; font-weight: bold;">I regularly log into online course to monitor course activities (e.g., discussion) so I contribute to the online course</td>
              <td><input type='radio' class='radio' name='q12' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q12' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q12' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q12' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q12' value='10' id='opt1' />
              </td>
            </tr>
          </table>
          <br>
          <input type="button" name="previous" class="previous action-button" value="Previous" onclick="window.location.href='/olrscted/form.php'" style='font-family: Bebas Neue, Arial;font-size:20px;color:white;background-color:red;border-radius: 10px; width:10%; border:1px solid white; align: center; padding:5px;' />
          <input type="button" name="next" class="next action-button" value="Next" onclick="topFunction()" style='font-family: Bebas Neue, Arial; float: right; font-size:20px;color:white;background-color:#27AE60;border-radius: 10px;border:1px solid white; align: center; width:10%; padding:5px;' />
        </fieldset>
        <fieldset  id="field_2">
          <table>
            <col class="col-1">
            <col class="col-2">
            <col class="col-3">
            <col class="col-4">
            <col class="col-5">
            <col class="col-6">
            
            <tr>
              <th></th>
              <th>Strongly Disagree</th>
              <th>Disagree</th>
              <th>Neutral</th>
              <th>Agree</th>
              <th>Strongly Agree</th>
            </tr>
            <tr>
              <td id='qs13' style="padding:20px; font-size:21px; font-weight: bold;">I plan my time in advance to complete assignments for online learning.</td>
              <td><input type='radio' class='radio' name='q13' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q13' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q13' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q13' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q13' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs14' style="padding:20px; font-size:21px; font-weight: bold;">I set up my own due dates for online assignments to avoid procrastination.
              </td>
              <td><input type='radio' class='radio' name='q14' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q14' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q14' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q14' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q14' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs15' style="padding:20px; font-size:21px; font-weight: bold;">Completing an assignment is always one of the top priorities in my schedule.
              </td>
              <td><input type='radio' class='radio' name='q15' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q15' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q15' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q15' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q15' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs16' style="padding:20px; font-size:21px; font-weight: bold;">I assign enough study time for online learning.</td>
              <td><input type='radio' class='radio' name='q16' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q16' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q16' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q16' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q16' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs17' style="padding:20px; font-size:21px; font-weight: bold;">I mark online assignments with due dates, so I do not miss anything.</td>
              <td><input type='radio' class='radio' name='q17' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q17' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q17' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q17' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q17' value='10' id='opt1' />
              </td>
            </tr>
            
            <tr>
              <td id='qs18' style="padding:20px; font-size:21px; font-weight: bold;">I choose a location where there will be fewer distraction to study</td>
              <td><input type='radio' class='radio' name='q18' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q18' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q18' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q18' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q18' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs19' style="padding:20px; font-size:21px; font-weight: bold;">I find a comfortable place to study for online learning.
              </td>
              <td><input type='radio' class='radio' name='q19' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q19' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q19' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q19' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q19' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs20' style="padding:20px; font-size:21px; font-weight: bold;">I know where I can do assignments most efficiently.
              </td>
              <td><input type='radio' class='radio' name='q20' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q20' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q20' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q20' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q20' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs21' style="padding:20px; font-size:21px; font-weight: bold;">
                I find a space where I can fully focus for learning.
              </td>
              <td><input type='radio' class='radio' name='q21' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q21' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q21' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q21' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q21' value='10' id='opt1' />
              </td>
            </tr>
            
            <tr>
              <td id='qs22' style="padding:20px; font-size:21px; font-weight: bold;">I can skillfully use a Learning Management System (e.g., Blackboard) to take an online course.</td>
              <td><input type='radio' class='radio' name='q22' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q22' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q22' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q22' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q22' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs23' style="padding:20px; font-size:21px; font-weight: bold;">I do not have a problem with using MS Office products or Google tools for my online learning.
              </td>
              <td><input type='radio' class='radio' name='q23' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q23' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q23' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q23' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q23' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs24' style="padding:20px; font-size:21px; font-weight: bold;">I am not afraid of using new software or tools for activities and assignments (e.g., collaboration or video conference) in an online course.
              </td>
              <td><input type='radio' class='radio' name='q24' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q24' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q24' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q24' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q24' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs25' style="padding:20px; font-size:21px; font-weight: bold;">
                I can fix the issue when I encounter technical problems
              </td>
              <td><input type='radio' class='radio' name='q25' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q25' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q25' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q25' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q25' value='10' id='opt1' />
              </td>
            </tr>
          </table>
          <br>
          <input type="button" name="previous" class="previous action-button" value="Previous" onclick="topFunction()" style='font-family: Bebas Neue, Arial;font-size:20px;color:white;background-color:red;border-radius: 10px; width:10%; border:1px solid white; align: center; padding:5px;' />
          <input type="button" name="next" class="next action-button" value="Next" onclick="topFunction()" style='font-family: Bebas Neue, Arial; float: right; font-size:20px;color:white;background-color:#27AE60;border-radius: 10px;border:1px solid white; align: center; width:10%; padding:5px;' />
        </fieldset>
        <fieldset  id="field_3">
        <table>
            <col class="col-1">
            <col class="col-2">
            <col class="col-3">
            <col class="col-4">
            <col class="col-5">
            <col class="col-6">
            
            <tr>
              <th></th>
              <th>Strongly Disagree</th>
              <th>Disagree</th>
              <th>Neutral</th>
              <th>Agree</th>
              <th>Strongly Agree</th>
            </tr>
            <tr>
              <td id='qs26' style="padding:20px; font-size:21px; font-weight: bold;">I ask the instructor questions when needed.</td>
              <td><input type='radio' class='radio' name='q26' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q26' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q26' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q26' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q26' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs27' style="padding:20px; font-size:21px; font-weight: bold;">I seek assistance from the instructor when needed.
              </td>
              <td><input type='radio' class='radio' name='q27' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q27' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q27' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q27' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q27' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs28' style="padding:20px; font-size:21px; font-weight: bold;">I ask the instructor to clarify information when it is not clear to me.
              </td>
              <td><input type='radio' class='radio' name='q28' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q28' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q28' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q28' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q28' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs29' style="padding:20px; font-size:21px; font-weight: bold;">
                I timely inform the instructor when unexpected situations arise.
              </td>
              <td><input type='radio' class='radio' name='q29' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q29' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q29' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q29' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q29' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs30' style="padding:20px; font-size:21px; font-weight: bold;">
                I initiate discussions with the instructor when needed.
              </td>
              <td><input type='radio' class='radio' name='q30' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q30' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q30' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q30' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q30' value='10' id='opt1' />
              </td>
            </tr>
            
            <tr>
              <td id='qs31' style="padding:20px; font-size:21px; font-weight: bold;">I effectively communicate with classmates.</td>
              <td><input type='radio' class='radio' name='q31' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q31' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q31' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q31' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q31' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs32' style="padding:20px; font-size:21px; font-weight: bold;">I respond to other students in a timely manner.
              </td>
              <td><input type='radio' class='radio' name='q32' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q32' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q32' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q32' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q32' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs33' style="padding:20px; font-size:21px; font-weight: bold;">I seek assistance from other students if I need it.
              </td>
              <td><input type='radio' class='radio' name='q33' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q33' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q33' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q33' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q33' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs34' style="padding:20px; font-size:21px; font-weight: bold;">
                I attempt  to help others online when given the opportunity.
              </td>
              <td><input type='radio' class='radio' name='q34' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q34' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q34' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q34' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q34' value='10' id='opt1' />
              </td>
            </tr>
            <tr>
              <td id='qs35' style="padding:20px; font-size:21px; font-weight: bold;">
                I express my opinions to other students when needed.
              </td>
              <td><input type='radio' class='radio' name='q35' value='2' id='opt5' />
              </td>
              <td><input type='radio' class='radio' name='q35' value='4' id='opt4' />
              </td>
              <td><input type='radio' class='radio' name='q35' value='6' id='opt3' />
              </td>
              <td><input type='radio' class='radio' name='q35' value='8' id='opt2' />
              </td>
              <td><input type='radio' class='radio' name='q35' value='10' id='opt1' />
              </td>
            </tr>
          </table>
          <br>
          <input type="button" name="previous" class="previous action-button" value="Previous" onclick="topFunction()" style='font-family: Bebas Neue, Arial;font-size:20px;color:white;background-color:red;border-radius: 10px; width:10%; border:1px solid white; align: center; padding:5px;' />
          <input type="button" name="next" class="next action-button" value="Next" onclick="topFunction()" style='font-family: Bebas Neue, Arial; float: right; font-size:20px;color:white;background-color:#27AE60;border-radius: 10px;border:1px solid white; align: center; width:10%; padding:5px;' />
        </fieldset>
        <fieldset  id="field_4">
        <table>
            <col class="col-1">
            <col class="col-2">
            <col class="col-3">
            <col class="col-4">
            <col class="col-5">
            <col class="col-6">
          
          <tr>
            <th></th>
            <th>Strongly Disagree</th>
            <th>Disagree</th>
            <th>Neutral</th>
            <th>Agree</th>
            <th>Strongly Agree</th>
          </tr>
          <tr>
            <td id='qs36' style="padding:20px; font-size:21px; font-weight: bold;">I work hard to do well in an online course even if I don’t like what we are doing.</td>
            <td><input type='radio' class='radio' name='q36' value='2' id='opt5' />
            </td>
            <td><input type='radio' class='radio' name='q36' value='4' id='opt4' />
            </td>
            <td><input type='radio' class='radio' name='q36' value='6' id='opt3' />
            </td>
            <td><input type='radio' class='radio' name='q36' value='8' id='opt2' />
            </td>
            <td><input type='radio' class='radio' name='q36' value='10' id='opt1' />
            </td>
          </tr>
          <tr>
            <td id='qs37' style="padding:20px; font-size:21px; font-weight: bold;">Even when course materials are dull and uninteresting, I still manage to keep working until I finish in an online course.
            </td>
            <td><input type='radio' class='radio' name='q37' value='2' id='opt5' />
            </td>
            <td><input type='radio' class='radio' name='q37' value='4' id='opt4' />
            </td>
            <td><input type='radio' class='radio' name='q37' value='6' id='opt3' />
            </td>
            <td><input type='radio' class='radio' name='q37' value='8' id='opt2' />
            </td>
            <td><input type='radio' class='radio' name='q37' value='10' id='opt1' />
            </td>
          </tr>
          <tr>
            <td id='qs38' style="padding:20px; font-size:21px; font-weight: bold;">I do not give up quickly even if my learning progress is slow in an online course.
            </td>
            <td><input type='radio' class='radio' name='q38' value='2' id='opt5' />
            </td>
            <td><input type='radio' class='radio' name='q38' value='4' id='opt4' />
            </td>
            <td><input type='radio' class='radio' name='q38' value='6' id='opt3' />
            </td>
            <td><input type='radio' class='radio' name='q38' value='8' id='opt2' />
            </td>
            <td><input type='radio' class='radio' name='q38' value='10' id='opt1' />
            </td>
          </tr>
          <tr>
            <td id='qs39' style="padding:20px; font-size:21px; font-weight: bold;">
              I do my best to achieve what is expected of me in an online course.
            </td>
            <td><input type='radio' class='radio' name='q39' value='2' id='opt5' />
            </td>
            <td><input type='radio' class='radio' name='q39' value='4' id='opt4' />
            </td>
            <td><input type='radio' class='radio' name='q39' value='6' id='opt3' />
            </td>
            <td><input type='radio' class='radio' name='q39' value='8' id='opt2' />
            </td>
            <td><input type='radio' class='radio' name='q39' value='10' id='opt1' />
            </td>
          </tr>
          
          <tr>
            <td id='qs40' style="padding:20px; font-size:21px; font-weight: bold;">I push myself to work intensely for the sake of learning.</td>
            <td><input type='radio' class='radio' name='q40' value='2' id='opt5' />
            </td>
            <td><input type='radio' class='radio' name='q40' value='4' id='opt4' />
            </td>
            <td><input type='radio' class='radio' name='q40' value='6' id='opt3' />
            </td>
            <td><input type='radio' class='radio' name='q40' value='8' id='opt2' />
            </td>
            <td><input type='radio' class='radio' name='q40' value='10' id='opt1' />
            </td>
          </tr>
          <tr>
            <td id='qs41' style="padding:20px; font-size:21px; font-weight: bold;">I persuade myself to keep learning in order to find out how much I can possibly learn.
            </td>
            <td><input type='radio' class='radio' name='q41' value='2' id='opt5' />
            </td>
            <td><input type='radio' class='radio' name='q41' value='4' id='opt4' />
            </td>
            <td><input type='radio' class='radio' name='q41' value='6' id='opt3' />
            </td>
            <td><input type='radio' class='radio' name='q41' value='8' id='opt2' />
            </td>
            <td><input type='radio' class='radio' name='q41' value='10' id='opt1' />
            </td>
          </tr>
          <tr>
            <td id='qs42' style="padding:20px; font-size:21px; font-weight: bold;">I challenge myself to finish the task so that I can learn a lot.
            </td>
            <td><input type='radio' class='radio' name='q42' value='2' id='opt5' />
            </td>
            <td><input type='radio' class='radio' name='q42' value='4' id='opt4' />
            </td>
            <td><input type='radio' class='radio' name='q42' value='6' id='opt3' />
            </td>
            <td><input type='radio' class='radio' name='q42' value='8' id='opt2' />
            </td>
            <td><input type='radio' class='radio' name='q42' value='10' id='opt1' />
            </td>
          </tr>
          <tr>
            <td id='qs43' style="padding:20px; font-size:21px; font-weight: bold;">
              I tell myself that I should keep learning in order to personally increase my knowledge.
            </td>
            <td><input type='radio' class='radio' name='q43' value='2' id='opt5' />
            </td>
            <td><input type='radio' class='radio' name='q43' value='4' id='opt4' />
            </td>
            <td><input type='radio' class='radio' name='q43' value='6' id='opt3' />
            </td>
            <td><input type='radio' class='radio' name='q43' value='8' id='opt2' />
            </td>
            <td><input type='radio' class='radio' name='q43' value='10' id='opt1' />
            </td>
          </tr>
        </table>
        
        <br>
        <input type="button" name="previous" class="previous action-button" onclick="topFunction()" value="Previous" style='font-family: Bebas Neue, Arial;font-size:20px;color:white;background-color:red;border-radius: 10px; width:10%; border:1px solid white; align: center; padding:5px;' />
        <input type='submit' class="submit action-button"style='font-family: Bebas Neue, Arial;font-size:20px; color:white;background-color:#27AE60; float: right; border-radius: 10px;border:1px solid white; align: center; padding:5px; width:10%;' value='   Submit   '/>
        </fieldset>
      </form>
      
    <script>
      //jQuery time
      var current_fs, next_fs, previous_fs; //fieldsets
      var left, opacity, scale; //fieldset properties which we will animate
      var animating; //flag to prevent quick multi-click glitches

      $(".next").click(function(){

        var current_index = $(this).parent().index("fieldset");
			
        if(!validateStep(current_index)){
			// }else{
				return false;
			}

          current_fs = $(this).parent();
          next_fs = $(this).parent().next();

          //activate next step on progressbar using the index of next_fs
          $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

          //show the next fieldset
          next_fs.show();
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
              step: function(now, mx) {
                  //as the opacity of current_fs reduces to 0 - stored in "now"
                  //1. scale current_fs down to 80%
                  scale = 1 - (1 - now) * 0.2;
                  //2. bring next_fs from the right(50%)
                  left = (now * 50)+"%";
                  //3. increase opacity of next_fs to 1 as it moves in
                  opacity = 1 - now;
                  current_fs.css({
              'transform': 'scale('+scale+')',
              'position': 'absolute'
            });
                  next_fs.css({'left': left, 'opacity': opacity});
              },
              duration: 0,
              complete: function(){
                  current_fs.hide();
                  animating = false;
              },
              //this comes from the custom easing plugin
              easing: 'easeInOutBack'
          });
           $(window).scrollTop($('#j-pro').offset().top);
      });

      $(".previous").click(function(){


          current_fs = $(this).parent();
          previous_fs = $(this).parent().prev();

          //de-activate current step on progressbar
          $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

          //show the previous fieldset
          previous_fs.show();
          //hide the current fieldset with style
          current_fs.animate({opacity: 0}, {
              step: function(now, mx) {
                  //as the opacity of current_fs reduces to 0 - stored in "now"
                  //1. scale previous_fs from 80% to 100%
                  scale = 0.8 + (1 - now) * 0.2;
                  //2. take current_fs to the right(50%) - from 0%
                  left = ((1-now) * 50)+"%";
                  //3. increase opacity of previous_fs to 1 as it moves in
                  opacity = 1 - now;
                  previous_fs.css({'transform': 'scale('+scale+')', 'position':'relative','opacity': opacity});
                  current_fs.css({'left': left});
              },
              duration: 0,
              complete: function(){
                  current_fs.hide();
                  animating = false;
              },
              //this comes from the custom easing plugin
              easing: 'easeInOutBack'
          });
      });
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }

      $(".submit").click(function(){
        var current_index = $(this).parent().index("fieldset");
        if(!validateStep(current_index)){
			// }else{
				return false;
			}
          // return false;
      });
      function validateStep(step){
			switch(step){
				case 0:
					if(($("input[name='q1']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
          }
          else if(($("input[name='q2']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
          }
          else if(($("input[name='q3']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q4']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q5']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q6']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q7']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q8']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q9']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q10']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q11']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q12']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}
					return true;
				break;
				case 1:
					if(($("input[name='q13']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
          }
          else if(($("input[name='q14']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
          }
          else if(($("input[name='q15']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q16']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q17']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q18']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q19']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q20']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q21']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q22']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q23']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q24']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q25']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}
					return true;
        break;
        case 2:
					 if(($("input[name='q26']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q27']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q28']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q29']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q30']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q31']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q32']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q33']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q34']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q35']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}
					return true;
				break;
				case 3:
					if(($("input[name='q36']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
          }
          else if(($("input[name='q37']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
          }
          else if(($("input[name='q38']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q39']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q40']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q41']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q42']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}else if(($("input[name='q43']:checked").length === 0)){
						alert('Please Answer All Questions');
						return false;
					}
					return true;
				break;
				
					
					
			}
		}
    </script>
  </body>
</html>