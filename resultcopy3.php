<?Php
  session_start();

  include "config.php";

  $ipaddress = $_SERVER['REMOTE_ADDR'];
  $survey_start = $_SESSION['survey_start'];
  $survey_end = date("m-d-Y H:i:s");

  $q1 = $_POST['q1']; $q2 = $_POST['q2']; $q3 = $_POST['q3']; $q4 = $_POST['q4']; $q5 = $_POST['q5'];
  $q6 = $_POST['q6']; $q7 = $_POST['q7']; $q8 = $_POST['q8']; $q9 = $_POST['q9']; $q10 = $_POST['q10'];
  $q11 = $_POST['q11']; $q12 = $_POST['q12']; $q13 = $_POST['q13']; $q14 = $_POST['q14'];
  $q15 = $_POST['q15']; $q16 = $_POST['q16']; $q17 = $_POST['q17']; $q18 = $_POST['q18'];
  $q19 = $_POST['q19']; $q20 = $_POST['q20']; $q21 = $_POST['q21']; $q22 = $_POST['q22'];
  $q23 = $_POST['q23']; $q24 = $_POST['q24']; $q25 = $_POST['q25']; $q26 = $_POST['q26'];
  $q27 = $_POST['q27']; $q28 = $_POST['q28']; $q29 = $_POST['q29']; $q30 = $_POST['q30'];
  $q31 = $_POST['q31']; $q32 = $_POST['q32']; $q33 = $_POST['q33']; $q34 = $_POST['q34'];
  $q35 = $_POST['q35']; $q36 = $_POST['q36']; $q37 = $_POST['q37']; $q38 = $_POST['q38'];
  $q39 = $_POST['q39']; $q40 = $_POST['q40']; $q41 = $_POST['q41']; $q42 = $_POST['q42'];
  $q43 = $_POST['q43'];

$total = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + $q18 + $q19 + $q20 + $q21 + $q22 + $q23 + $q24 + $q25 + $q26 + $q27 + $q28 + $q29 + $q30 + $q31 + $q32 + $q33 + $q34 + $q35 + $q36 + $q37 + $q38 + $q39 + $q40 + $q41 + $q42 + $q43;




  //$sql = "INSERT INTO survey_result (IP_Address, Survey_Start, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10, Q11, Q12, Q13, Q14, Q15, Q16, Q17, Q18, Q19, Q20, Q21, Q22, Q23, Q24, Q25, Q26, Q27, Q28, Q29, Q30, Q31, Q32, Q33, Q34, Q35, Q36, Q37, Q38, Q39, Q40, Q41, Q42, Q43, Total) VALUES ('$ipaddress', '$survey_start', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13', '$q14', '$q15', '$q16', '$q17', '$q18', '$q19', '$q20', '$q21','$q22', '$q23', '$q24', '$q25', '$q26', '$q27', '$q28', '$q29', '$q30', '$q31', '$q32', '$q33', '$q34', '$q35', '$q36', '$q37', '$q38', '$q39', '$q40', '$q41', '$q42', '$q43', $total)";

 $sql = "INSERT INTO survey_result (IP_Address, Survey_Start, Q1, Q2, Total) VALUES ('$ipaddress', '$survey_start', '$q1', '$q2', $total)";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
  ?>
<!Doctype html>
<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="Chart.min.js"></script>
    <script src="https://www.amcharts.com/lib/4/core.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://www.amcharts.com/lib/4/charts.js"></script>
    <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
    <meta name="viewport" content="initial-scale = 1, user-scalable = no" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.chartjs.org/dist/master/Chart.min.js"></script>
    <link href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLRSC</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"  src='http://cdn.renderedfont.com/js/renderedfont-0.8.min.js#free'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="Chart.min.js"></script>
    <script src="utils.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
    <script src="myscript.js"></script>
  </head>
  <body>
    <div id='maindiv' class='maindiv'>
    <div class='container-fluid bg-grey row'>
      </br>
      <div class='row'>
        <div class='col-sm-6'>
          <img src='COE logo.png' alt='CIEL' class='responsive' style='width:318px;height:71px;' align='left'>
        </div>
        <div class='col-sm-6'>
          <img src='CIEL logo.png' alt='CIEL' class='responsive' style='width:320px;height:70px;' align='right'>
        </div>
      </div>
    </div>
    <br>
    <h2>Online Learning Readiness Self-Check Results</h2>
    <!-- Modal -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="mtext1"></span></p>
            <embed src="Goal Setting.pdf" frameborder="0" width="100%" height="550px">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="mtext2"></span></p>
            <embed src="Monitoring.pdf" frameborder="0" width='100%' height='550px'>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="mtext3"></span></p>
            <embed src="Time Management_hyperlinks.pdf" frameborder="0" width='100%' height='550px'>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="mtext4"></span></p>
            <embed src="SpaceM.pdf" frameborder="0" width="100%" height="550px">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="mtext5"></span></p>
            <embed src="TECHM.pdf" frameborder="0" width="100%" height="550px">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="mtext6"></span></p>
            <embed src="Instructor Interaction.pdf" frameborder="0" width="100%" height="550px">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="mtext7"></span></p>
            <embed src="Peer Interaction.pdf" frameborder="0" width="100%" height="550px">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="mtext8"></span></p>
            <embed src="Effort regulation.pdf" frameborder="0" width="100%" height="550px">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><span id="mtext9"></span></p>
            <embed src="Master self talk.pdf" frameborder="0" width="100%" height="550px">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-grey row">
    <div class="row">
      <div class="col-sm-12">
        <br><br>
        <center>
          <p style="font-size:3vw;" id="avg"></p>
          <p style="font-size:1.5vw;" id="feedback"></p>
        </center>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-10">
        <center>
          <div id="canvas-holder" >
            <canvas id="chart-area" width="100%" height="50%"></canvas>
          </div>
        </center>
      </div>
      <div class="col-sm-1">
      </div>
    </div>
    <br>
    <h2>Online Learning Readiness Framework</h2>
    </br>
    <div class="col-sm-6">
      <center>
        <div class="relative">
          <div id="canvas-holder" >
            <canvas id="chartarea1" width="100%" height="100%" style="border:1px solid #000000;"></canvas>
            <div class="topleft">Motivational Management</div>
            <div class="topright">Learning Management</div>
            <div class="bottomleft">Interaction Management</div>
            <div class="bottomright">Resources Management</div>
            <div class="absolute-center text-center">
              <p style="font-size:2.25vw;">Be a</p>
              <p style="font-size:2.25vw;">Successful</p>
              <p style="font-size:2.25vw;">Online Learner!</p>
            </div>
          </div>
      </center>
      <br>
      </div>
      <div class="col-sm-6">
        <div class="divs" id="myDIV1">
          <p>Goal Setting</p>
          <br>
          <p>It refers to students’ strategy to manage and achieve their goals by breaking a long-term goal (e.g., completing an extensive and complex task) into small sub-goals so that they can be easily achieved. </p>
          <br>
          <ol>
            <li>Plan your assignment</li>
            <li>Break down course workload</li>
            <li>Use step-by-step approach</li>
            <li>Set your goals effectively</li>
          </ol>
        </div>
        <div class="divs" id="myDIV2">
          <p>Monitoring</p>
          <br>
          <p>It refers to Students’ strategy to monitor their learning status in an online course to make sure they are on the right track. </p>
          <br>
          <ol>
            <li>Check your online course regularly</li>
            <li>Check the course guidelines</li>
            <li>Check your own progress regularly</li>
            <li>Check your participation in activities regularly</li>
          </ol>
        </div>
        <div class="divs" id="myDIV3">
          <p>Time Management</p>
          <br>
          <p>It refers to Students’ strategy to manage and use their time effectively for success in online learning by predicting necessary time allotment for course task in relation to their entire schedule.  </p>
          <br>
          <ol>
            <li>Plan your timeline to complete an online assignment</li>
            <li>Mark online assignments with due dates</li>
            <li>Give top priority on your asssignment completion</li>
            <li>allot enough time for online learning</li>
          </ol>
        </div>
        <div class="divs" id="myDIV4">
          <p>Space Management</p>
          <br>
          <p>It refers to Students’ strategy to manage their space effectively for success in online learning by finding a comfortable and non-distractive place in which they can focus on their tasks.  </p>
          <br>
          <ol>
            <li>Minimize distractions</li>
            <li>Find a place in which you study comfortably</li>
            <li>Find a place in which you can focus on your learning</li>
          </ol>
        </div>
        <div class="divs" id="myDIV5">
          <p>Technology Management</p>
          <br>
          <p>It refers to Students’ level of proficiency in using technology relevant to online courses (e.g., using functions in Blackboard or installing software to learn). </p>
          <br>
          <ol>
            <li>Navigate Learning Management System (e.g., Blackboard)</li>
            <li>Use Microsoft office or Google Tools</li>
            <li>Use suggested software</li>
            <li>Toubleshoot technical issues</li>
          </ol>
        </div>
        <div class="divs" id="myDIV6">
          <p>Interaction with the Instructor</p>
          <br>
          <p>It refers to Students’ strategy to interact with the instructor of their online courses by initiating questions and discussions, as well as maintaining open communication with the instructor.  </p>
          <br>
          <ol>
            <li>Clarify the expectation with your instructor</li>
            <li>Seek assistance from the instructor</li>
            <li>Ask for clarification</li>
            <li>Timely inform the instructor when issues arise</li>
          </ol>
        </div>
        <div class="divs" id="myDIV7">
          <p>Interaction with the Peers</p>
          <br>
          <p>It refers to Students’ strategy to interact with the peers not only for learning but also for contributing to the online learning community by questioning and providing opinions to help each other.  </p>
          <br>
          <ol>
            <li>Respond to others in a timely manner</li>
            <li>Seek assistance from other students </li>
            <li>Help other students</li>
            <li>Express your opinions to other students</li>
          </ol>
        </div>
        <div class="divs" id="myDIV8">
          <p>Effort Regulation</p>
          <br>
          <p>It refers to Students’ strategy to manage their effort and attention in the face of distractions and uninteresting tasks by being persistence in accomplishing learning tasks. </p>
          <br>
          <ol>
            <li>Work hard to do well</li>
            <li>Complete the assignment or activity</li>
            <li>Be persitent</li>
            <li>Do your best to meet the learning goals</li>
          </ol>
        </div>
        <div class="divs" id="myDIV9">
          <p>Mastery Self-Talk </p>
          <br>
          <p>It refers to Students’ strategy to enhance their competence through self-talking and reinforcing to master the content.  </p>
          <br>
          <ol>
            <li>Persuade yourself to master course content</li>
            <li>Challenge yourself</li>
            <li>Self-talk</li>
          </ol>
        </div>
      </div>
      <a href="Framework and Resources1104.pdf" download>
      <button class="btn" style="width:100%"><i class="fa fa-download"></i> Click to Download Tips for Online Learning</button>
      </a>
    </div>
  </body>
</html>
