<!DOCTYPE html>
<html>
  <head>
    <title>OLRSC</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"  src='http://cdn.renderedfont.com/js/renderedfont-0.8.min.js#free'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
    img {
       object-fit: fill;
       max-width: 100%;
       max-height: 100%;
       width: auto;
       height: auto;
    }
      html, body { height: 100%; width: 100%; margin: 0; }
      .banner { height: 80%; width: 100%}
      .container-fluid{
      margin-left: 0px;
      position: relative;
      }
      * {
      box-sizing: border-box;
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
  </head>
  <body>
<img src="Banner1.png" style="width:100%; height:35%;">
  <!-- <div style="width:100%; height:50%"><img src="Banner1.png" style="height:100%; width:100%"></div> */-->
    <div id="about" class="container-fluid" style="padding-left: 60px;padding-right:60px; color: black;">
      </br></br>
      <hr style="border-style: solid;
        border-width: 5px; border-color: #d64550; width:30%;" align= "left">
      <h1 style="font-family: Bebas Neue, Arial;">PURPOSE OF THE OLRSC</h1>
      <p  align= "justify", style="font-size: 18px;font-family: Calibri, sans-serif; line-height: 1.5;">The Online Learning Readiness Self-Check (OLRSC) system is created to help you measure how ready you are for the online courses. Besides providing you an overall readiness score, we also provide individualized feedback and valuable resources for you to be successful in online learning.</p>
      </br>
      <hr style="border-style: solid;
        border-width: 5px; border-color: #91c2c9; width: 10%;" align= "left">
      <h1 style="font-family: Bebas Neue, Arial;">ABOUT THE OLRSC</h1>
      <p align= "justify", style="font-size: 18px;font-family: Calibri, sans-serif; line-height: 1.5;">This OLRSC identifies your level of proficiency in the nine areas that significantly contribute to online academic success. It takes about 10 minutes to complete the self-check survey and the responses are anonymous. To provide you an accurate result, it is important that you choose the most honest description of yourself.
        <br>After you complete the survey, you will receive an overall score including individual scores of each area. All the recommendation and resources from proven research will be provided based on your strengths and weaknesses. Remember to keep a copy of the recommendations for your records and retake the survey later.
      </p>
      </br>
      <hr style="border-style: solid;
        border-width: 5px; border-color: #3d5467; width: 30%;" align= "left">
      <h1 style="font-family: Bebas Neue, Arial;">WHO CAN USE THE OLRSC?</h1>
      <p align= "justify", style="font-size: 18px;font-family: Calibri, sans-serif;">This system is for anyone who want to diagnose their strengths and weaknesses in online learning.</p>
      </br>
      <hr style="border-style: solid;
        border-width: 5px; border-color: #df7373; width: 10%;" align= "left">
      <h1 style="font-family: Bebas Neue, Arial;">CONTACT</h1>
      <p style="font-size: 18px;font-family: Calibri, sans-serif;">If you have any questions, please contact us.</br></p>
      </br>
      <div id="about" class="container-fluid" style="background-color:#C6CAC7; color: black;width: 50%;">
        <p style="font-size: 18px;font-family: Calibri, sans-serif;font-weight:bold;"></br>Center for Innovation in E-Learning (CIEL)</br></p>
        <p style="font-size: 18px;font-family: Calibri, sans-serif;">Texas Tech University</br>College of Education</br>3002 18th Street Lubbock</br>TX 79409</br><img src="ciel.png" alt="ciel" align="right" width="147.84" height="69.12"></br>Phone: (806) 742-2377</br>Email: ciel.educ@ttu.edu</br></p>
        </br></br>
      </div>
      <p style="font-size: 18px;font-family: Calibri, sans-serif;"></br>Click on the “START” button below to start the survey.</br>
        </br>
      </p>
      <form action="resultcopy.php" align="center" method = "post">
        <input type="submit" style="font-family: Bebas Neue, Arial;font-size:27px;color:white;background-color:black;border-radius: 4px;border:1px solid white; align: center; padding:5px;" value="    START    "/>
      </form>
      <form action="http://ciel.educ.ttu.edu/olrsc/db.php">
    <input type="submit" value="Admin View" />
</form>
      </br>
    </div>
  </body>
</html>
