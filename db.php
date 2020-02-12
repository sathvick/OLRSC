<?php
session_start();
include "config.php";
$user = $_POST['user'];
$pass = $_POST['pass'];

if(!($user == "admin" && $pass == "admin"))
{
    echo '<html><body><style>.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}</style><div class="container"><form method="POST" action="'.$_SERVER['REQUEST_URI'].'"><h1>ADMIN LOGIN</h1>
            <br/>Username: <input type="text" name="user"></input><br/><br/>
            Password: <input type="password" name="pass"></input><br/><br/>
            <input type="submit" name="submit" value="Login"></input>
            </form></div></body></html>';
    exit();
}
?>
<head>
  <title>
    OLRSC Database
  </title>
</head>
<style>

table{
  border: 1px solid black;
  text-align: center;
  table-layout: auto;
}

th, td {
  border: 1px solid black;
  text-align: center;
}

</style>
<head>
  <title>
    OLRSC Database
  </title>
</head>
<div class="container">

 <form method='post' action='download.php'>
  <input type="submit" name='Export' style="font-family: Bebas Neue, Arial;font-size:27px;color:white;background-color:black;border-radius: 4px;border:1px solid white; align: center; padding:5px;" value="    Export    "/>
  <br>
  <br>

  <table>
    <tr>
     <th>SNO</th>
     <th>IP Address</th>
     <th>Survey Start</th>
     <th>Survey End</th>
     <th>Duration</th>
     <th>Q1</th> <th>Q2</th> <th>Q3</th> <th>Q4</th> <th>Q5</th> <th>Q6</th> <th>Q7</th> <th>Q8</th> <th>Q9</th> <th>Q10</th> <th>Q11</th> <th>Q12</th> <th>Q13</th> <th>Q14</th> <th>Q15</th> <th>Q16</th> <th>Q17</th> <th>Q18</th> <th>Q19</th> <th>Q20</th> <th>Q21</th> <th>Q22</th> <th>Q23</th> <th>Q24</th> <th>Q25</th> <th>Q26</th> <th>Q27</th> <th>Q28</th> <th>Q29</th> <th>Q30</th> <th>Q31</th> <th>Q32</th> <th>Q33</th> <th>Q34</th> <th>Q35</th> <th>Q36</th> <th>Q37</th> <th>Q38</th> <th>Q39</th> <th>Q40</th> <th>Q41</th> <th>Q42</th> <th>Q43</th><th>Total</th>
    </tr>
    <?php
     $query = "SELECT * FROM survey_result ORDER BY SNO asc";
     $result = mysqli_query($conn,$query);
     $user_arr = array();
     while($row = mysqli_fetch_array($result)){
      $sno = $row['SNO'];
      $ip = $row['IP_Address'];
      $ss = $row['Survey_Start'];
      $se = $row['Survey_End'];
      $du = $row['Duration'];
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
      $user_arr[] = array($id, $ip, $ss, $se, $du, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30, $q31, $q32, $q33, $q34, $q35, $q36, $q37, $q38, $q39, $q40, $q41, $q42, $q43, $total);
   ?>
      <tr>
       <td><?php echo $sno; ?></td>
       <td><?php echo $ip; ?></td>
       <td><?php echo $ss; ?></td>
       <td><?php echo $se; ?></td>
       <td><?php echo $du; ?></td>
       <td><?php echo $q1; ?></td> <td><?php echo $q2; ?></td> <td><?php echo $q3; ?></td> <td><?php echo $q4; ?></td> <td><?php echo $q5; ?></td> <td><?php echo $q6; ?></td> <td><?php echo $q7; ?></td> <td><?php echo $q8; ?></td> <td><?php echo $q9; ?></td> <td><?php echo $q10; ?></td> <td><?php echo $q11; ?></td> <td><?php echo $q12; ?></td> <td><?php echo $q13; ?></td> <td><?php echo $q14; ?></td> <td><?php echo $q15; ?></td> <td><?php echo $q16; ?></td> <td><?php echo $q17; ?></td> <td><?php echo $q18; ?></td> <td><?php echo $q19; ?></td> <td><?php echo $q20; ?></td> <td><?php echo $q21; ?></td><td><?php echo $q22; ?></td> <td><?php echo $q23; ?></td> <td><?php echo $q24; ?></td> <td><?php echo $q25; ?></td> <td><?php echo $q26; ?></td> <td><?php echo $q27; ?></td> <td><?php echo $q28; ?></td> <td><?php echo $q29; ?></td> <td><?php echo $q30; ?></td> <td><?php echo $q31; ?></td> <td><?php echo $q32; ?></td> <td><?php echo $q33; ?></td> <td><?php echo $q34; ?></td> <td><?php echo $q35; ?></td> <td><?php echo $q36; ?></td> <td><?php echo $q37; ?></td> <td><?php echo $q38; ?></td> <td><?php echo $q39; ?></td> <td><?php echo $q40; ?></td> <td><?php echo $q41; ?></td> <td><?php echo $q42; ?></td> <td><?php echo $q43; ?></td><td><?php echo $total; ?></td>
      </tr>
   <?php
    }
   ?>
   </table>
   <?php
    $serialize_user_arr = serialize($user_arr);
   ?>
  <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>


 </form>
</div>
