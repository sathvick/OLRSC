
<?php
   session_start();
   include "adminAuth.php";
   ?>
   <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <title>OLRSC-TED</title>
</head>
<body>
<nav class="navbar navbar-expand-sm">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <ul class="navbar-nav">
          <li class="nav-item">
          <form action='index.php'>
          <button class="btn btn-danger"  style="font-size:24px">Sign Out <i class="fa fa-sign-out"></i></button>
          </form>
          </li>
        </ul>
      </div>
    </nav>
  <!-- START HERE -->
<!-- JUMBOTRON -->
<div class="jumbotron text-center">
      <h1 class="display-4">Welcome Researcher!</h1>
      <hr>
      <p>Click on Export to download the Survey Data.</p>
      <form method='post' action='download.php'>
      <button class="btn btn-success btn-lg" type="submit">Export <i class="fa fa-download"></i></button>
      <?php
             $query = "SELECT * FROM admin ORDER BY SNO asc";
             $result = mysqli_query($conn,$query);
             $user_arr = array();
             $user_arr[0] = array("SNO", "Site", "IP_Address", "Term", "Email", "Survey_Start", "Survey_End", "Result_Close", "Survey_Duration", "Result_Duration", "Total_Duration", "Q1", "Q2", "Q3", "Q4", "Q5", "Q6", "Q7", "Q8", "Q9", "Q10", "Q11", "Q12", "Q13", "Q14", "Q15", "Q16", "Q17", "Q18", "Q19", "Q20", "Q21", "Q22", "Q23", "Q24", "Q25", "Q26", "Q27", "Q28", "Q29", "Q30", "Q31", "Q32", "Q33", "Q34", "Q35", "Q36", "Q37", "Q38", "Q39", "Q40", "Q41", "Q42", "Q43", "Total", "Result", "Tips");
             while($row = mysqli_fetch_array($result)){
              $sno = $row['SNO'];
              $site = $row['Site'];
              $ip = $row['IP_Address'];
              $start = $row['Survey_Start'];
              $survey_end = $row['Survey_End'];
              $email = $row['Email'];
              $result_close = $row['Result_Close'];
              $s_duration = $row['Survey_Duration'];
              $r_duration = $row['Result_Duration'];
              $t_duration = $row['Total_Duration'];
              $q1 = $row['Q1'];
              $q2 = $row['Q2'];
              $q3 = $row['Q3'];
              $q4 = $row['Q4'];
              $q5 = $row['Q5'];
              $q6 = $row['Q6'];
              $q7 = $row['Q7'];
              $q8 = $row['Q8'];
              $q9 = $row['Q9'];
              $q10 = $row['Q10'];
              $q11 = $row['Q11'];
              $q12 = $row['Q12'];
              $q13 = $row['Q13'];
              $q14 = $row['Q14'];
              $q15 = $row['Q15'];
              $q16 = $row['Q16'];
              $q17 = $row['Q17'];
              $q18 = $row['Q18'];
              $q19 = $row['Q19'];
              $q20 = $row['Q20'];
              $q21 = $row['Q21'];
              $q22 = $row['Q22'];
              $q23 = $row['Q23'];
              $q24 = $row['Q24'];
              $q25 = $row['Q25'];
              $q26 = $row['Q26'];
              $q27 = $row['Q27'];
              $q28 = $row['Q28'];
              $q29 = $row['Q29'];
              $q30 = $row['Q30'];
              $q31 = $row['Q31'];
              $q32 = $row['Q32'];
              $q33 = $row['Q33'];
              $q34 = $row['Q34'];
              $q35 = $row['Q35'];
              $q36 = $row['Q36'];
              $q37 = $row['Q37'];
              $q38 = $row['Q38'];
              $q39 = $row['Q39'];
              $q40 = $row['Q40'];
              $q41 = $row['Q41'];
              $q42 = $row['Q42'];
              $q43 = $row['Q43'];
              $total = $row['Total'];
              $term = $row['Term'];
              $res = $row['Result'];
              $tips = $row['Tips'];
              $user_arr[] = array($sno, $site, $ip, $term, $email, $start, $survey_end, $result_close, $s_duration, $r_duration, $t_duration, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20, $q21,$q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30, $q31, $q32, $q33, $q34, $q35, $q36, $q37, $q38, $q39, $q40, $q41, $q42, $q43, $total, $res, $tips);  
            }
            $serialize_user_arr = serialize($user_arr);
         ?>
      <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
 </form>
    </div>
    <br>
  </div>
   </body>
</html>